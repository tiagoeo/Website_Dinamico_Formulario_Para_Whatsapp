<footer class="text-muted py-5 text-center">
    <div class="container">
        <?php if ($novoDadosWebsite['manutencao'] == '0'): ?>
            <p class="mb-1">&copy; <?php echo date('Y'); echo ' - '.$novoDadosWebsite['nome']; ?></p>
        <?php else: ?>
            <p class="mb-1">&copy; <?php echo date('Y');?></p>
        <?php endif ?>
    </div>
</footer>