const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");
let w = canvas.width = window.innerWidth;
let h = canvas.height = window.innerHeight;

function many(count, createFn) {
    return Array.from({ length: count }, createFn);
}

function spawn() {
    const size = 30 + Math.random() * 20; // Taille de l'étoile
    return {
        x: Math.random() * w,
        y: Math.random() * h,
        speed: 0.05 + Math.random() * 0.02, // Vitesse de suivi
        size,
        follow(targetX, targetY) {
            this.x += (targetX - this.x) * this.speed;
            this.y += (targetY - this.y) * this.speed;
        },
        repel(others) {
            others.forEach(other => {
                if (this === other) return;
                const dx = this.x - other.x;
                const dy = this.y - other.y;
                const distance = Math.sqrt(dx * dx + dy * dy);
                if (distance < this.size * 2) {
                    const angle = Math.atan2(dy, dx);
                    this.x += Math.cos(angle) * 2;
                    this.y += Math.sin(angle) * 2;
                }
            });
        },
        drawStar() {
            const spikes = 5; // Nombre de pointes
            const outerRadius = this.size / 2;
            const innerRadius = outerRadius / 2.5;
            let rotation = -Math.PI / 2; // Rotation initiale

            ctx.beginPath();
            for (let i = 0; i < spikes * 2; i++) {
                const radius = i % 2 === 0 ? outerRadius : innerRadius;
                const angle = i * Math.PI / spikes + rotation;

                ctx.lineTo(
                    this.x + radius * Math.cos(angle),
                    this.y + radius * Math.sin(angle)
                );
            }
            ctx.closePath();

            // Contour noir plus épais
            ctx.strokeStyle = "#000";
            ctx.lineWidth = 4; // Contour épais
            ctx.stroke();

            // Remplissage rouge vif
            ctx.fillStyle = "#ff0000";
            ctx.fill();
        },
        tick(others) {
            this.repel(others);
            this.drawStar();
        }
    };
}

const stars = many(4, spawn); // Générer 10 étoiles

addEventListener("pointermove", (e) => {
    stars.forEach(star => star.follow(e.clientX, e.clientY));
});

requestAnimationFrame(function anim() {
    w = canvas.width = innerWidth;
    h = canvas.height = innerHeight;

    ctx.clearRect(0, 0, w, h); // Nettoyer le canvas

    stars.forEach(star => star.tick(stars));
    requestAnimationFrame(anim);
});