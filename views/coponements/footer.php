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
    </script>
</body>
</html> 