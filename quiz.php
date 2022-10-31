<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <title>Quiz de Arcane</title>
    <link rel="stylesheet" href="./css/quiz.css" />
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body id="page-home">
    <div id="loader"></div>
    <!-- start Quiz button -->
    <div class="start_btn">
        <button class="btn" id="button_play">Iniciar o Quiz</button>
    </div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Bem vindo(a) ao quiz de Arcane: Descubra o quanto você conhece sobre o universo da serie.</span></div>
        <div class="info-list">
            <div class="info">
                1. Você terá apenas<span> 15 segundos</span> para cada pergunta.
            </div>
            <div class="info">
                2. Depois de selecionar sua resposta não pode ser desfeita.
            </div>
            <div class="info">
                3. Você não pode selecionar opção depois que o tempo acabar.
            </div>
            <div class="info">
                4. Você não pode sair do Quiz enquanto estiver jogando.
            </div>
            <div class="info">5. Você receberá 10 pontos por resposta correta.</div>
        </div>
        <div class="buttons">
            <button class="quit">Sair do Quiz</button>
            <button class="restart">Continuar</button>
        </div>
    </div>
    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Arcane Quiz</div>
            <div class="timer">
                <div class="time_left_txt">Tempo Restante</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>
        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <div id="hud-item">
                <p class="hud-prefix">Pontuação <span class="hud-main-text" id="score">0</span></p>
            </div>
            <button class="next_btn">Próxima Questão</button>
        </footer>
    </div>
    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Você completou o Quiz!!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Salvar Quiz</button>
            <button class="quit">Sair do Quiz</button>
        </div>
    </div>
    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="./data/questions.js"></script>
    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="./javascript/index.js"></script>
</body>

</html>