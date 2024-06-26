<script src="<?php echo e(config('toastify.cdn.js')); ?>"></script>

<script>
    (() => {
        const config = <?php echo json_encode(config('toastify'), 15, 512) ?>;

        // Merge defaults with user options
        Toastify.defaults = { ...Toastify.defaults, ...config.defaults };

        const toastifiers = {};
        for (const [toastifier, opts] of Object.entries(config.toastifiers)) {

            // Append toastifier to the list
            toastifiers[toastifier] = (text, options = {}) => {
                return Toastify({ text, ...opts, ...options }).showToast();
            };

            // Register toastifier as a jQuery function if jQuery is available
            if (window.$) window.$[toastifier] = toastifiers[toastifier];
        }

        // Register toastify function
        window.toastify = () => toastifiers;
    })();

    // Read toastify messages from session
    document.addEventListener('DOMContentLoaded', () => {
        const toastifies = <?php echo json_encode(session('toastify') ?? [], 15, 512) ?>;

        toastifies.forEach(({ type, message, options = [] }) => {
            window.toastify()[type](message, options);
        });
    });
</script>

<?php echo e(session()->forget('toastify')); ?><?php /**PATH C:\File PENS\develops\web-prak\Charity\vendor\redot\laravel-toastify\src/../resources/views/js.blade.php ENDPATH**/ ?>