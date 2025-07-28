<?php
// Forward Vercel requests to normal index.php
require __DIR__ . '/../index.php';
exit; // Pastikan phpinfo tidak dijalankan
