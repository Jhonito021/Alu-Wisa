    <footer class="footer">
        <div class="container">
            <p>&copy; <span id="date"></span> Jhonito 021. Tous droits réservés.</p>
        </div>
    </footer>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script>
        const date = new Date();
        const option = { year: 'numeric', month: 'long'};
        const dates = date.toLocaleDateString(undefined, option);
        document.getElementById ('date').textContent = dates;


        const title = document.getElementById("hero-title");
        const fullText = "Bienvenue sur DevisTrack Express";
        const stopText = "Bien";
        let index = 0;
        let isDeleting = false;

        function animateTyping() {
            if (!isDeleting) {
                // Tape lettre par lettre
                title.textContent = fullText.substring(0, index + 1);
                index++;
            if (index === fullText.length) {
                isDeleting = true;
                setTimeout(animateTyping, 2000); // pause avant suppression
                return;
            }
        } else {
            // Efface jusqu'à "Bien"
            title.textContent = fullText.substring(0, index - 1);
            index--;
        if (fullText.substring(0, index) === stopText) {
            isDeleting = false;
            setTimeout(animateTyping, 1500); // pause avant re-tape
            return;
        }
    }
        setTimeout(animateTyping, 80);
    }

      // Lancer dès le chargement de la page
        window.addEventListener("load", animateTyping);
    </script>
</body>
</html> 