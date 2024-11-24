document.addEventListener('mousemove', (e) => {
    const sparkCount = 5; // Number of sparks per movement
    for (let i = 0; i < sparkCount; i++) {
        const spark = document.createElement('div');
        spark.className = 'spark';

        // Slightly randomize the position around the mouse pointer
        const offsetX = (Math.random() - 0.5) * 20; // Random offset between -10px and 10px
        const offsetY = (Math.random() - 0.5) * 20;

        spark.style.left = `${e.pageX + offsetX}px`;
        spark.style.top = `${e.pageY + offsetY}px`;

        // Append to body
        document.body.appendChild(spark);

        // Remove spark after animation ends
        setTimeout(() => {
            spark.remove();
        }, 1000); // Match the animation duration in CSS
    }
});
