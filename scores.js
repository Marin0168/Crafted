new Vue({
    el: '#app',
    data: {
        robots: {
            Tommy: { name: 'Tommy', score: 0, image: 'images/robot2.png' },
            Joan: { name: 'Joan', score: 0, image: 'images/robot3.png' }
        },
        error: false,
        errorMessage: 'Er is geen actieve game bezig of er zijn nog geen punten gescoord.'
    },
    methods: {
        fetchScores() {
            fetch('https://sd-crafted-api.summaict.nl/api/get_scores')
                .then(response => response.json())
                .then(data => {
                    if (data.arduino_current_game.length === 0) {
                        this.error = true;
                    } else {
                        this.error = false;
                        data.arduino_current_game.forEach(score => {
                            if (score.arduino_name === 'Tommy') {
                                this.robots.Tommy.score = score.arduino_score;
                            } else if (score.arduino_name === 'Joan') {
                                this.robots.Joan.score = score.arduino_score;
                            }
                        });
                    }
                })
                .catch(error => {
                    console.error('Error fetching scores:', error);
                    this.error = true;
                });
        }
    },
    created() {
        this.fetchScores();
        setInterval(this.fetchScores, 5000);
    }
});
