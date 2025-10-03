<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Bem-vindo à Biblioteca Digital</h1>
        <p class="lead">Descubra milhares de livros, mangás e recursos educacionais</p>
        <div class="mt-4">
            <div class="input-group mx-auto" style="max-width: 500px;">
                <input type="text" class="form-control" placeholder="Buscar livros, mangás, autores...">
                <button class="btn btn-light" type="button">
                    <i class="fas fa-search"></i> Buscar
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Destaques -->
<section class="container">
    <h2 class="text-center mb-5">Mangás e Livros em Destaque</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card book-card">
                <img src="https://via.placeholder.com/300x400/667eea/ffffff?text=Como+Treinar+o+seu+Dragão" class="card-img-top" alt="Como Treinar o seu Dragão">
                <div class="card-body">
                    <h5 class="card-title">Como Treinar o seu Dragão</h5>
                    <p class="card-text">Cressida Cowell</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-success">Disponível</span>
                        <button class="btn btn-primary btn-sm">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card book-card">
                <img src="https://via.placeholder.com/300x400/764ba2/ffffff?text=Chainsaw+Man" class="card-img-top" alt="Chainsaw Man">
                <div class="card-body">
                    <h5 class="card-title">Chainsaw Man</h5>
                    <p class="card-text">Tatsuki Fujimoto</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-warning">Última cópia</span>
                        <button class="btn btn-primary btn-sm">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card book-card">
                <img src="https://via.placeholder.com/300x400/f093fb/ffffff?text=Bleach" class="card-img-top" alt="Bleach">
                <div class="card-body">
                    <h5 class="card-title">Bleach</h5>
                    <p class="card-text">Tite Kubo</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-success">Disponível</span>
                        <button class="btn btn-primary btn-sm">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categorias -->
<section class="container mt-5">
    <h2 class="text-center mb-4">Categorias Populares</h2>
    <div class="row text-center">
        <div class="col-md-3 mb-3">
            <div class="category-card p-4 border rounded">
                <i class="fas fa-dragon fa-2x text-primary mb-2"></i>
                <h5>Fantasia</h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="category-card p-4 border rounded">
                <i class="fas fa-fist-raised fa-2x text-danger mb-2"></i>
                <h5>Shonen</h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="category-card p-4 border rounded">
                <i class="fas fa-book fa-2x text-success mb-2"></i>
                <h5>Literatura</h5>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="category-card p-4 border rounded">
                <i class="fas fa-robot fa-2x text-warning mb-2"></i>
                <h5>Ficção Científica</h5>
            </div>
        </div>
    </div>
</section>

<!-- Estatísticas -->
<section class="bg-light py-5 mt-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <h3 class="text-primary">5,000+</h3>
                <p>Livros e Mangás</p>
            </div>
            <div class="col-md-3">
                <h3 class="text-primary">1,200+</h3>
                <p>Usuários Ativos</p>
            </div>
            <div class="col-md-3">
                <h3 class="text-primary">200+</h3>
                <p>Séries de Mangá</p>
            </div>
            <div class="col-md-3">
                <h3 class="text-primary">24/7</h3>
                <p>Acesso Online</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>