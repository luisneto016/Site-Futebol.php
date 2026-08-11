<?php
// Dados do portal: Notícias, Clubes e Jogadores
$destaque_principal = [
    'titulo' => 'Grandes craques, grandes histórias',
    'subtitulo' => 'Imagens de atletas consagrados pra gente conseguir nota kkkkkkkk ajuda nois Petinelson',
    'autor' => 'Grupo 4 - Gustavo Pereira, Luis Neto, Luiz Gustavo, Pedro Aquino, Bryan Massagardi e Gabriel Prado',
    'data' => 'Vi não'
];

$jogadores = [
    [
        'nome' => 'Lionel Pepsi',
        'alcunha' => 'Artilheiro dos 1000 pênaltis',
        'posicao' => 'Atacante / Camisa 10',
        'clube' => 'Inter Miami / Argentina',
        'imagem' => 'https://media.tenor.com/xIDMdm9WNVYAAAAM/messiking22.gif',
        'descricao' => 'Assistir a Lionel Messi é presenciar a gravidade ser desfiada em milímetros. Ele não corre com a bola; ele a conduz como uma extensão de sua própria anatomia. Cada drible é uma solução matemática matemática inesperada, e cada gol, uma obra de arte pincelada com a sutileza de quem enxerga o tempo em câmera lenta.',
        'estatisticas' => ['Gols' => '800+', 'Assistências' => '380+', 'Bolas de Ouro' => '8']
    ],
    [
        'nome' => 'Cristiano Ronaldo',
        'alcunha' => 'Robozaum',
        'posicao' => 'Centroavante',
        'clube' => 'Al-Nassr / Portugal',
        'imagem' => 'https://media.tenor.com/NF6ixwAmrTMAAAAM/cristiano-ronaldo-drinking.gif',
        'descricao' => 'O monumento humano à determinação. Cristiano transforma esforço em poesia estática, desafiando a física em saltos majestosos que parecem congelar o ar. Sua trajetória é um ode ao rigor técnico, onde a disciplina encontra o instinto predador de um atleta imortal.',
        'estatisticas' => ['Gols' => 'Quase mil gols', 'Champions League' => '5', 'Bolas de Ouro' => '5']
    ],
    [
        'nome' => 'Kylian Mbappé',
        'alcunha' => 'Tartaruga Ninja',
        'posicao' => 'Atacante de Ponta',
        'clube' => 'Real Madrid / França',
        'imagem' => 'https://i.pinimg.com/originals/2a/ef/05/2aef05e072c648af032fb13d2a549827.gif',
        'descricao' => 'Uma tempestade perfeita de velocidade fulminante e frieza cirúrgica. Mbappé devora os gramados como um predador elegante, transformando defesas organizadas em meros espectadores de sua aceleração hipnotizante.',
        'estatisticas' => ['Gols em Copas' => '22', 'Time' => 'Real Madrid', 'Copas do Mundo' => '1']
    ],
    [
        'nome' => 'Jude Bellingham',
        'alcunha' => 'João Belligol, para os íntimos',
        'posicao' => 'Meia-Atacante',
        'clube' => 'Real Madrid / Inglaterra',
        'imagem' => 'https://www.gifcen.com/wp-content/uploads/2024/06/jude-bellingham-gif-2.gif',
        'descricao' => 'A elegância clássica personificada em um jovem prodígio. Bellingham domina o meio-campo com a maturidade de um veterano, combinando visão espacial apurada, pisada na área e uma postura imponente que comanda o ritmo do jogo.',
        'estatisticas' => ['Passes Certos' => 'Sei não kkk', 'Desarmes' => 'Não vi', 'Gols na Temporada' => '0 (não começou)']
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinfonia dos Gramados | O Portal do Futebol Arte</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,800;1,400&family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #040526;
            --bg-card: #000b01;
            --accent-gold: #D4AF37;
            --accent-green: #10B981;
            --text-main: #F3F4F6;
            --text-muted: #9CA3AF;
            --border-color: rgba(212, 175, 55, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-main);
            line-height: 1.6;
        }

        h1, h2, h3, .serif {
            font-family: 'Playfair Display', serif;
        }

        /* Header e Navegação */
        header {
            background: rgba(11, 15, 25, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--accent-gold);
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        nav button {
            background: none;
            border: none;
            color: var(--text-muted);
            font-size: 1rem;
            font-weight: 600;
            margin-left: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 6px;
        }

        nav button.active, nav button:hover {
            color: var(--accent-gold);
            background: rgba(212, 175, 55, 0.1);
        }

        /* Containers principais */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }

        .tab-content.active {
            display: block;
        }

        /* Banner de Destaque */
        .hero-banner {
            background: linear-gradient(180deg, rgba(11, 15, 25, 0.2) 0%, var(--bg-dark) 100%), 
                        url('https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=1600&q=80') center/cover;
            border-radius: 16px;
            padding: 4rem 2rem;
            margin-bottom: 3rem;
            border: 1px solid var(--border-color);
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
        }

        .hero-banner h1 {
            font-size: 2.8rem;
            color: #FFF;
            margin-bottom: 1rem;
            max-width: 800px;
        }

        .hero-banner p {
            font-size: 1.2rem;
            color: var(--text-muted);
            max-width: 650px;
            margin-bottom: 1.5rem;
        }

        .meta-info {
            font-size: 0.85rem;
            color: var(--accent-gold);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Grid de Jogadores */
        .players-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
        }

        .player-card {
            background-color: var(--bg-card);
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .player-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(212, 175, 55, 0.15);
        }

        .player-img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            border-bottom: 1px solid var(--border-color);
        }

        .player-info {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .player-header {
            margin-bottom: 1rem;
        }

        .player-name {
            font-size: 1.6rem;
            color: #FFF;
        }

        .player-tag {
            color: var(--accent-gold);
            font-style: italic;
            font-size: 0.95rem;
            margin-bottom: 0.3rem;
        }

        .player-meta {
            font-size: 0.8rem;
            color: var(--accent-green);
            font-weight: 700;
            text-transform: uppercase;
        }

        .player-desc {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .stats-container {
            display: flex;
            justify-content: space-between;
            background: rgba(0,0,0,0.3);
            padding: 0.8rem;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.05);
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-weight: 700;
            color: var(--accent-gold);
            font-size: 1.1rem;
        }

        .stat-label {
            font-size: 0.7rem;
            color: var(--text-muted);
            text-transform: uppercase;
        }

        /* Animação */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        footer {
            text-align: center;
            padding: 2rem;
            border-top: 1px solid var(--border-color);
            margin-top: 4rem;
            color: var(--text-muted);
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">⚽ Sinfonia dos Gramados</div>
        <nav>
            <button class="nav-btn active" onclick="switchTab('destaques')">Destaques</button>
            <button class="nav-btn" onclick="switchTab('lendas')">Lendas & Estrelas</button>
            <button class="nav-btn" onclick="switchTab('manifesto')">O Manifesto</button>
        </nav>
    </header>

    <main class="container">
        
        <!-- ABA 1: DESTAQUES -->
        <section id="destaques" class="tab-content active">
            <article class="hero-banner">
                <div class="meta-info"><?php echo $destaque_principal['autor']; ?> • <?php echo $destaque_principal['data']; ?></div>
                <h1><?php echo $destaque_principal['titulo']; ?></h1>
                <p><?php echo $destaque_principal['subtitulo']; ?></p>
            </article>

            <h2 style="margin-bottom: 1.5rem; color: var(--accent-gold);">Protagonistas em Foco</h2>
            <div class="players-grid">
                <?php foreach (array_slice($jogadores, 0, 2) as $j): ?>
                    <div class="player-card">
                        <img src="<?php echo $j['imagem']; ?>" alt="<?php echo $j['nome']; ?>" class="player-img">
                        <div class="player-info">
                            <div class="player-header">
                                <p class="player-tag">"<?php echo $j['alcunha']; ?>"</p>
                                <h3 class="player-name"><?php echo $j['nome']; ?></h3>
                                <p class="player-meta"><?php echo $j['posicao']; ?> | <?php echo $j['clube']; ?></p>
                            </div>
                            <p class="player-desc"><?php echo $j['descricao']; ?></p>
                            <div class="stats-container">
                                <?php foreach ($j['estatisticas'] as $label => $val): ?>
                                    <div class="stat-item">
                                        <div class="stat-value"><?php echo $val; ?></div>
                                        <div class="stat-label"><?php echo $label; ?></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ABA 2: JOGADORES -->
        <section id="lendas" class="tab-content">
            <h2 style="margin-bottom: 0.5rem; color: var(--accent-gold);">Catálogo de Craques</h2>
            <p style="color: var(--text-muted); margin-bottom: 2rem;">Perfis detalhados sobre os atletas que redefinem o conceito de genialidade.</p>
            
            <div class="players-grid">
                <?php foreach ($jogadores as $j): ?>
                    <div class="player-card">
                        <img src="<?php echo $j['imagem']; ?>" alt="<?php echo $j['nome']; ?>" class="player-img">
                        <div class="player-info">
                            <div class="player-header">
                                <p class="player-tag">"<?php echo $j['alcunha']; ?>"</p>
                                <h3 class="player-name"><?php echo $j['nome']; ?></h3>
                                <p class="player-meta"><?php echo $j['posicao']; ?> | <?php echo $j['clube']; ?></p>
                            </div>
                            <p class="player-desc"><?php echo $j['descricao']; ?></p>
                            <div class="stats-container">
                                <?php foreach ($j['estatisticas'] as $label => $val): ?>
                                    <div class="stat-item">
                                        <div class="stat-value"><?php echo $val; ?></div>
                                        <div class="stat-label"><?php echo $label; ?></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ABA 3: MANIFESTO -->
        <section id="manifesto" class="tab-content">
            <div style="max-width: 800px; margin: 0 auto; background: var(--bg-card); padding: 3rem; border-radius: 12px; border: 1px solid var(--border-color);">
                <h2 style="color: var(--accent-gold); font-size: 2.2rem; margin-bottom: 1.5rem;">A Geometria da Paixão</h2>
                <p style="margin-bottom: 1.2rem; font-size: 1.1rem; color: #E5E7EB;">
                    O futebol não é apenas um jogo de 90 minutos demarcado por linhas brancas e regras táticas. É uma linguagem universal onde o gramado se transforma em uma tela em branco, e os atletas, em artistas performáticos.
                </p>
                <p style="margin-bottom: 1.2rem; font-size: 1.1rem; color: #E5E7EB;">
                    Cada passe bem executado carrega a intenção de uma conversa silenciosa. O gol não é um mero número no placar, mas a explosão catártica que une multidões sob o mesmo sentimento de pertencimento.
                </p>
                <p style="font-size: 1.1rem; color: var(--accent-gold); font-style: italic;">
                    "No futebol, como na arte, a simplicidade é o último grau da sofisticação."
                </p>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Sinfonia dos Gramados. Todos os direitos reservados.</p>
    </footer>

    <script>
        function switchTab(tabId) {
            // Esconde todas as abas
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Remove classe ativa dos botões
            document.querySelectorAll('.nav-btn').forEach(btn => {
                btn.classList.remove('active');
            });

            // Mostra a aba clicada e ativa o botão
            document.getElementById(tabId).classList.add('active');
            event.currentTarget.classList.add('active');
        }
    </script>
</body>
</html>