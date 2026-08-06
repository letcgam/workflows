
    </div>

    <footer id="main-footer">
        <div class="container-fluid" style="padding: 8px 10%;">
            Avaliação básica de PHP e CodeIgniter 3 - CCI
        </div>
    </footer>
    
    <!-- JQuery minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- BOotstrap minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <script>
        // Injeta a base_url do CodeIgniter numa variável JS global
        const BASE_URL = "<?= base_url(); ?>";
    </script>

    <?php
    if (isset($js) && is_array($js)) :
        foreach ($js as $script) :
            ?> <script src="<?= base_url($script) ?>"></script> <?php
        endforeach;
    endif;
    ?>
</body>
</html>
