<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test je Kennis - Curio DevBox Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">
    <div class="container mx-auto px-4 py-12 max-w-4xl">
        <!-- Header -->
        <header class="mb-12">
            <a href="../about.php" class="inline-flex items-center text-slate-600 hover:text-slate-900 mb-6 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Terug naar uitleg
            </a>
            <h1 class="text-5xl font-bold text-slate-900 mb-4">Test je Kennis!</h1>
            <p class="text-xl text-slate-600">
                Beantwoord 25 vragen over Curio DevBox, Docker en de ontwikkelomgeving.
            </p>
        </header>

        <!-- Quiz Section -->
        <section class="bg-white rounded-xl shadow-sm p-8 border border-slate-200">
            <div id="quiz-container">
                <div id="quiz-results" class="hidden mb-6 p-6 bg-green-50 border border-green-200 rounded-lg">
                    <h3 class="text-2xl font-bold text-green-900 mb-2">Gefeliciteerd! 🎉</h3>
                    <p class="text-green-800 text-lg">Je score: <span id="score">0</span> / 25</p>
                    <p class="text-green-700 mt-2" id="score-message"></p>
                </div>

                <form id="quiz-form" class="space-y-8">
                    <?php
                    $questions = [
                        [
                            'question' => 'Wat is Docker?',
                            'options' => [
                                'Een programmeertaal',
                                'Een technologie die ervoor zorgt dat applicaties overal hetzelfde werken',
                                'Een database systeem',
                                'Een webserver'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is een Docker container?',
                            'options' => [
                                'Een fysieke doos voor opslag',
                                'Een lichtgewicht, draagbare omgeving die alles bevat om een applicatie te draaien',
                                'Een database type',
                                'Een programmeertaal'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is Docker Compose?',
                            'options' => [
                                'Een programmeertaal',
                                'Een tool om meerdere containers tegelijk te beheren',
                                'Een database systeem',
                                'Een webserver'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Welk commando gebruik je om alle containers te starten?',
                            'options' => [
                                'docker start',
                                'docker-compose up -d',
                                'docker run',
                                'docker build'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is het voordeel van Docker containers?',
                            'options' => [
                                'Ze zijn gratis',
                                'Ze zijn geïsoleerd en kunnen met elkaar communiceren zonder elkaar in de weg te zitten',
                                'Ze zijn sneller dan normale applicaties',
                                'Ze gebruiken geen geheugen'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Welke PHP versie heeft Curio DevBox?',
                            'options' => [
                                'PHP 7.4',
                                'PHP 8.0',
                                'PHP 8.4',
                                'PHP 9.0'
                            ],
                            'correct' => 2
                        ],
                        [
                            'question' => 'Wat betekent CRUD?',
                            'options' => [
                                'Create, Read, Update, Delete',
                                'Code, Run, Update, Debug',
                                'Computer, Router, User, Database',
                                'Create, Remove, Update, Download'
                            ],
                            'correct' => 0
                        ],
                        [
                            'question' => 'Wat is het verschil tussen MySQL en Redis?',
                            'options' => [
                                'MySQL is voor permanente opslag, Redis is voor tijdelijke snelle data',
                                'Ze zijn hetzelfde',
                                'MySQL is sneller dan Redis',
                                'Redis is een database, MySQL is een cache'
                            ],
                            'correct' => 0
                        ],
                        [
                            'question' => 'Welke poort gebruikt Apache in Curio DevBox?',
                            'options' => [
                                '80',
                                '8080',
                                '3000',
                                '3306'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is het verschil tussen Nginx en Apache?',
                            'options' => [
                                'Nginx is sneller en moderner, Apache is traditioneel en betrouwbaar',
                                'Ze zijn identiek',
                                'Apache is alleen voor Windows',
                                'Nginx kan geen PHP verwerken'
                            ],
                            'correct' => 0
                        ],
                        [
                            'question' => 'Waar worden je projecten geplaatst in Curio DevBox?',
                            'options' => [
                                'In de docker folder',
                                'In de www folder',
                                'In de config folder',
                                'In de root folder'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is phpMyAdmin?',
                            'options' => [
                                'Een PHP framework',
                                'Een webinterface om databases te beheren',
                                'Een programmeertaal',
                                'Een webserver'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat doet MailHog?',
                            'options' => [
                                'Verstuurt echte e-mails',
                                'Vangt e-mails op tijdens ontwikkeling zodat je ze kunt testen',
                                'Beheert databases',
                                'Start webservers'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is Node.js?',
                            'options' => [
                                'Een database',
                                'Een runtime omgeving om JavaScript op de server te gebruiken',
                                'Een webserver',
                                'Een programmeertaal'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Welk commando gebruik je om alle containers te stoppen?',
                            'options' => [
                                'docker-compose down',
                                'docker stop',
                                'docker-compose stop',
                                'docker kill'
                            ],
                            'correct' => 0
                        ],
                        [
                            'question' => 'Wat is een database tabel?',
                            'options' => [
                                'Een bestand op je computer',
                                'Een gestructureerde verzameling van gerelateerde data (zoals een Excel sheet)',
                                'Een programmeertaal',
                                'Een webserver configuratie'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Waarom gebruik je een database in plaats van HTML bestanden?',
                            'options' => [
                                'Databases zijn mooier',
                                'Met een database kun je dynamische content maken, gemakkelijk zoeken en data beheren',
                                'HTML bestanden werken niet',
                                'Databases zijn gratis'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is PDO?',
                            'options' => [
                                'Een PHP extensie',
                                'Een veilige manier om met databases te communiceren vanuit PHP',
                                'Een database type',
                                'Een webserver'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is het verschil tussen een Docker image en een container?',
                            'options' => [
                                'Een image is een template, een container is een draaiende instantie van een image',
                                'Ze zijn hetzelfde',
                                'Een container is een template, een image is een draaiende instantie',
                                'Een image draait altijd, een container niet'
                            ],
                            'correct' => 0
                        ],
                        [
                            'question' => 'Wat gebeurt er als je docker-compose down uitvoert?',
                            'options' => [
                                'Alle containers worden gestopt en verwijderd',
                                'Alleen de containers worden gestopt, data blijft bewaard',
                                'Alle data wordt verwijderd',
                                'De containers worden opnieuw gestart'
                            ],
                            'correct' => 0
                        ],
                        [
                            'question' => 'Welke database naam wordt gebruikt voor de games applicatie?',
                            'options' => [
                                'curiodevbox',
                                'games',
                                'mysql',
                                'devbox'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is het verschil tussen PHP en JavaScript?',
                            'options' => [
                                'PHP draait op de server, JavaScript draait in de browser',
                                'Ze zijn hetzelfde',
                                'PHP is alleen voor databases',
                                'JavaScript kan geen websites maken'
                            ],
                            'correct' => 0
                        ],
                        [
                            'question' => 'Waar kun je phpMyAdmin openen?',
                            'options' => [
                                'http://localhost',
                                'http://localhost:8081',
                                'http://localhost:8080',
                                'http://localhost:3000'
                            ],
                            'correct' => 1
                        ],
                        [
                            'question' => 'Wat is het belangrijkste voordeel van Curio DevBox voor studenten?',
                            'options' => [
                                'Het is gratis',
                                'Geen installatie stress, werkt overal hetzelfde, echte werkomgeving',
                                'Het is snel',
                                'Het heeft veel kleuren'
                            ],
                            'correct' => 1
                        ]
                    ];

                    foreach ($questions as $index => $q) {
                        echo '<div class="question-block border-b border-slate-200 pb-6" data-question="' . $index . '">';
                        echo '<h3 class="text-xl font-semibold text-slate-900 mb-4">Vraag ' . ($index + 1) . ': ' . htmlspecialchars($q['question']) . '</h3>';
                        echo '<div class="space-y-3">';
                        foreach ($q['options'] as $optIndex => $option) {
                            $isCorrect = ($optIndex == $q['correct']) ? 'true' : 'false';
                            echo '<label class="flex items-center p-3 border border-slate-300 rounded-lg cursor-pointer hover:bg-slate-50 transition-colors">';
                            echo '<input type="radio" name="q' . $index . '" value="' . $optIndex . '" data-correct="' . $isCorrect . '" class="mr-3 question-answer" required>';
                            echo '<span>' . htmlspecialchars($option) . '</span>';
                            echo '</label>';
                        }
                        echo '</div>';
                        echo '<div class="answer-feedback mt-3 hidden"></div>';
                        echo '</div>';
                    }
                    ?>
                    
                    <div class="flex gap-4 mt-8">
                        <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                            Controleer Antwoorden
                        </button>
                        <button type="button" id="reset-quiz" class="px-8 py-3 bg-slate-600 text-white rounded-lg hover:bg-slate-700 transition-colors font-semibold">
                            Opnieuw
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <!-- Confetti Library -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    
    <script>
        // Confetti functie
        function triggerConfetti() {
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 }
            });
        }

        // Quiz logica
        const quizForm = document.getElementById('quiz-form');
        const resetBtn = document.getElementById('reset-quiz');
        const resultsDiv = document.getElementById('quiz-results');
        const scoreSpan = document.getElementById('score');
        const scoreMessage = document.getElementById('score-message');

        // Form submit - controleer alle antwoorden
        quizForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let score = 0;
            const totalQuestions = <?php echo count($questions); ?>;
            
            // Controleer alle vragen en toon feedback
            document.querySelectorAll('.question-block').forEach(block => {
                const selected = block.querySelector('.question-answer:checked');
                const feedbackDiv = block.querySelector('.answer-feedback');
                
                // Verwijder oude feedback styling
                block.querySelectorAll('label').forEach(label => {
                    label.classList.remove('bg-green-100', 'border-green-500', 'bg-red-100', 'border-red-500');
                });
                
                if (selected) {
                    const isCorrect = selected.dataset.correct === 'true';
                    
                    if (isCorrect) {
                        score++;
                        selected.closest('label').classList.add('bg-green-100', 'border-green-500');
                        feedbackDiv.innerHTML = '<p class="text-green-700 font-semibold">✓ Goed gedaan!</p>';
                        feedbackDiv.classList.remove('hidden');
                        // Confetti voor elk goed antwoord
                        triggerConfetti();
                    } else {
                        selected.closest('label').classList.add('bg-red-100', 'border-red-500');
                        // Markeer het juiste antwoord
                        const correctAnswer = block.querySelector('[data-correct="true"]').closest('label');
                        correctAnswer.classList.add('bg-green-100', 'border-green-500');
                        feedbackDiv.innerHTML = '<p class="text-red-700 font-semibold">✗ Helaas, dit is niet correct.</p>';
                        feedbackDiv.classList.remove('hidden');
                    }
                } else {
                    // Geen antwoord geselecteerd
                    const correctAnswer = block.querySelector('[data-correct="true"]').closest('label');
                    correctAnswer.classList.add('bg-green-100', 'border-green-500');
                    feedbackDiv.innerHTML = '<p class="text-slate-700 font-semibold">Geen antwoord gegeven. Het juiste antwoord is gemarkeerd.</p>';
                    feedbackDiv.classList.remove('hidden');
                }
            });
            
            // Toon resultaten
            scoreSpan.textContent = score;
            const percentage = Math.round((score / totalQuestions) * 100);
            
            if (percentage === 100) {
                scoreMessage.textContent = 'Perfect! Je kent Curio DevBox door en door! 🏆';
                // Extra confetti voor perfecte score
                for (let i = 0; i < 3; i++) {
                    setTimeout(() => triggerConfetti(), i * 300);
                }
            } else if (percentage >= 80) {
                scoreMessage.textContent = 'Geweldig! Je hebt een goed begrip van de ontwikkelomgeving! 👏';
            } else if (percentage >= 60) {
                scoreMessage.textContent = 'Goed gedaan! Je kent de basis, maar er is nog meer te leren! 📚';
            } else {
                scoreMessage.textContent = 'Niet slecht! Lees de uitleg nog eens door en probeer het opnieuw! 💪';
            }
            
            resultsDiv.classList.remove('hidden');
            resultsDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });

        // Reset quiz
        resetBtn.addEventListener('click', function() {
            quizForm.reset();
            resultsDiv.classList.add('hidden');
            
            document.querySelectorAll('.question-block').forEach(block => {
                const feedbackDiv = block.querySelector('.answer-feedback');
                feedbackDiv.classList.add('hidden');
                block.querySelectorAll('label').forEach(label => {
                    label.classList.remove('bg-green-100', 'border-green-500', 'bg-red-100', 'border-red-500');
                });
            });
        });
    </script>
</body>
</html>

