document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Di sini Anda bisa menambahkan logika untuk memverifikasi login
    // Misalnya, menggunakan API atau memeriksa data statis
    
    if (username === 'user' && password === 'password') {
        alert('Login berhasil!');
        window.location.href = 'index.html'; // Redirect ke halaman utama
    } else {
        alert('Username atau password salah!');
    }
});