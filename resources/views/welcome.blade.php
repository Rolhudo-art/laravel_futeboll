<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena Stats | O Coração do Jogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
:root {
    --primary: #e2fd10; /* Amarelo limão/elétrico */
    --white: #ffffff;
    --dark: #0a0a0a;
    --gray: #888;
}

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
    font-family: 'Inter', sans-serif;
    background-color: var(--dark);
    color: var(--white);
    overflow: hidden; /* Mantém o foco no Welcome */
}

/* Background com imagem ou textura */
.hero-bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(10,10,10,0.9) 30%, transparent 100%),
                url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&q=80&w=1600') center/cover;
    z-index: -1;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 8%;
}

.logo { font-size: 1.5rem; font-weight: 900; letter-spacing: -1px; }
.logo span { color: var(--primary); }

nav { display: flex; gap: 30px; align-items: center; }
nav a { text-decoration: none; color: var(--white); font-weight: 500; font-size: 0.9rem; }

.btn-login {
    border: 1px solid var(--primary);
    padding: 8px 20px;
    border-radius: 5px;
    color: var(--primary) !important;
}

.hero-content {
    height: 80vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 0 8%;
}

.badge {
    background: rgba(255,255,255,0.1);
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    color: var(--primary);
    text-transform: uppercase;
    font-weight: bold;
}

h1 {
    font-size: clamp(2.5rem, 6vw, 5rem);
    line-height: 0.9;
    margin: 20px 0;
    font-weight: 900;
}

h1 span {
    -webkit-text-stroke: 1px var(--white);
    color: transparent;
}

p {
    max-width: 500px;
    color: var(--gray);
    line-height: 1.6;
    margin-bottom: 40px;
}

.cta-buttons { display: flex; gap: 15px; }

button {
    padding: 15px 35px;
    border-radius: 4px;
    border: none;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.btn-primary { background: var(--primary); color: var(--dark); }
.btn-primary:hover { background: var(--white); }

.btn-secondary { background: transparent; color: var(--white); border: 1px solid #333; }
.btn-secondary:hover { border-color: var(--white); }

.quick-stats-preview {
    margin-top: 60px;
    display: flex;
    gap: 40px;
}

.stat-item { display: flex; flex-direction: column; }
.stat-value { font-size: 1.5rem; font-weight: bold; color: var(--primary); }
.stat-label { font-size: 0.8rem; color: var(--gray); text-transform: uppercase; }
    </style>

    <div class="hero-bg"></div>

    <header>
        <div class="logo">ARENA<span>STATS</span></div>
        <nav>
            <a href="#">Explorar</a>
            <a href="#">Ligas</a>
            <a href="#" class="btn-login">Entrar</a>
        </nav>
    </header>

    <main class="hero-content">
        <section class="intro">
            <span class="badge">Temporada 2026</span>
            <h1>TUDO SOBRE O <br><span>SEU TIME</span> EM UM SÓ LUGAR.</h1>
            <p>Acompanhe escalações, estatísticas detalhadas de jogadores e posições em tempo real. A análise profunda que o torcedor moderno precisa.</p>
            
            <div class="cta-buttons">
                <button class="btn-primary">Ver Elencos</button>
                <button class="btn-secondary">Buscar Jogador</button>
            </div>
        </section>

        <section class="quick-stats-preview">
            <div class="stat-item">
                <span class="stat-value">+500</span>
                <span class="stat-label">Jogadores</span>
            </div>
            <div class="stat-item">
                <span class="stat-value">20</span>
                <span class="stat-label">Clubes Ativos</span>
            </div>
        </section>
    </main>

</body>
</html>