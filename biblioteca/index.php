<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container position-relative">
        <h1 class="display-4 fw-bold" style="color: var(--voltron-yellow); text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
            BIBLIOTECA ALTEA
        </h1>
        <p class="lead fs-4" style="color: #e0e0e0;">
            Onde o conhecimento forma o Voltron da sabedoria
        </p>
        <div class="mt-5">
            <div class="input-group mx-auto" style="max-width: 500px;">
                <input type="text" class="form-control" placeholder="Ativar scanner galáctico..." 
                       style="background: rgba(255,255,255,0.1); border: 1px solid var(--voltron-yellow); color: white;">
                <button class="btn btn-voltron" type="button">
                    <i class="fas fa-satellite"></i> Digitalizar
                </button>
            </div>
        </div>
        <div class="mt-4">
            <span class="badge bg-primary me-2">Ficção Científica</span>
            <span class="badge bg-danger me-2">Fantasia Épica</span>
            <span class="badge bg-success me-2">Tecnologia</span>
            <span class="badge bg-warning me-2">Aventura Espacial</span>
        </div>
    </div>
</section>

<!-- Livros em Destaque -->
<section class="container mb-5">
    <h2 class="section-title">MISSÕES EM DESTAQUE</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card book-card h-100">
                <img src="https://via.placeholder.com/300x400/1a237e/ffffff?text=VOLTRON+1" class="card-img-top" alt="Voltron 1">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--voltron-yellow);">A Lenda dos Leões</h5>
                    <p class="card-text">Crônicas da formação do Voltron</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="lion-badge">Disponível</span>
                        <button class="btn btn-voltron btn-sm">
                            <i class="fas fa-bolt"></i> Acessar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card book-card h-100">
                <img src="https://via.placeholder.com/300x400/b71c1c/ffffff?text=GALRA+WARS" class="card-img-top" alt="Galra Wars">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--voltron-yellow);">Guerras Galra</h5>
                    <p class="card-text">História do império Zarkon</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="lion-badge" style="background: linear-gradient(45deg, var(--voltron-red), var(--voltron-yellow));">Última Cópia</span>
                        <button class="btn btn-voltron btn-sm">
                            <i class="fas fa-bolt"></i> Acessar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card book-card h-100">
                <img src="https://via.placeholder.com/300x400/1b5e20/ffffff?text=ALTEA+TECH" class="card-img-top" alt="Altea Tech">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--voltron-yellow);">Tecnologia Alteana</h5>
                    <p class="card-text">Segredos da ciência do rei Alfor</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="lion-badge" style="background: linear-gradient(45deg, var(--voltron-green), var(--voltron-blue));">Disponível</span>
                        <button class="btn btn-voltron btn-sm">
                            <i class="fas fa-bolt"></i> Acessar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Estatísticas -->
<section class="stats-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <span class="stat-number">10K+</span>
                <p>Relatórios Galácticos</p>
            </div>
            <div class="col-md-3">
                <span class="stat-number">5K+</span>
                <p>Paladinos Ativos</p>
            </div>
            <div class="col-md-3">
                <span class="stat-number">100+</span>
                <p>Sistemas Conquistados</p>
            </div>
            <div class="col-md-3">
                <span class="stat-number">24/7</span>
                <p>Operação Universal</p>
            </div>
        </div>
    </div>
</section>

<!-- Leões de Voltron -->
<section class="container my-5">
    <h2 class="section-title">OS LEÕES DE VOLTRON</h2>
    <div class="row">
        <div class="col-md-2 text-center">
            <div class="lion-icon" style="color: var(--voltron-black);">
                <i class="fas fa-lion fa-3x"></i>
                <p>Leão Negro</p>
            </div>
        </div>
        <div class="col-md-2 text-center">
            <div class="lion-icon" style="color: var(--voltron-red);">
                <i class="fas fa-lion fa-3x"></i>
                <p>Leão Vermelho</p>
            </div>
        </div>
        <div class="col-md-2 text-center">
            <div class="lion-icon" style="color: var(--voltron-green);">
                <i class="fas fa-lion fa-3x"></i>
                <p>Leão Verde</p>
            </div>
        </div>
        <div class="col-md-2 text-center">
            <div class="lion-icon" style="color: var(--voltron-blue);">
                <i class="fas fa-lion fa-3x"></i>
                <p>Leão Azul</p>
            </div>
        </div>
        <div class="col-md-2 text-center">
            <div class="lion-icon" style="color: var(--voltron-yellow);">
                <i class="fas fa-lion fa-3x"></i>
                <p>Leão Amarelo</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>