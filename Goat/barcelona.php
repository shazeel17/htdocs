<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #282c34;
    line-height: 1.6;
}

/* Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Heading */
h1 {
    color: #e63946;
    font-size: 2.5rem;
    text-align: center;
    margin: 20px 0;
}

/* Paragraphs */
p {
    color: #f1faee;
    font-size: 1.125rem;
    line-height: 1.8;
    margin: 0 10%;
}

/* Images */
img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 20px auto;
}

/* Responsive Design */
@media (max-width: 768px) {
    h1 {
        font-size: 2rem;
    }

    p {
        font-size: 1rem;
        margin: 0 5%;
    }
}

/* Header and Footer */
header, footer {
    background-color: #1d3557;
    color: #f1faee;
    text-align: center;
    padding: 15px;
}

header a, footer a {
    color: #f1faee;
    text-decoration: none;
    margin: 0 10px;
}

header a:hover, footer a:hover {
    text-decoration: underline;
}

/* Utility Classes */
.text-center {
    text-align: center;
}

.margin-auto {
    margin: 0 auto;
}

.padding-20 {
    padding: 20px;
}

    </style>
</head>
<body>
    <?php include("header.php"); ?>

    <div class="container">
        <div class="text-center">
            <img src="https://www.fcbarcelona.com/photo-resources/2023/08/20/5fa7b9d1-1dc2-49ef-99a3-f6c871fe7dde/mini_RodadePremsaComiatLeoMessi08082021_pic_2021-08-08despedidamessi50.jpg?width=1200&height=750" alt="Barcelona">
            <h1>Barcelona</h1>
            <p>At the age of 16 years, four months, and 23 days old, Messi made his first-team debut as a 75th-minute substitute during a friendly against Porto on 16 November 2003. Under Frank Rijkaard, who promoted him to the first team in October 2004, he made his league debut on 16 October 2004 against Espanyol, and scored his first senior goal on 1 May 2005 against Albacete, from an assist by Ronaldinho, becoming at that time the youngest-ever scorer for the club. At 17 years, three months, and 22 days old, he was at the time the youngest player to represent Barcelona in an official competition. Messi won the league title in the 2004–05, and 2005–06 season. He won his first Champions League trophy in the 2006 final, although he was ruled out injured. On 10 March 2007, Messi scored his first hat-trick in a Clásico, the first player to do so in 12 years, equalising after each goal by Real Madrid to end the match in a 3–3 draw in injury time. In Rijkaard's final years at the club, Barcelona finished the 2006–07, and 2007–08 season without trophies, leading to his departure. Messi was given the number 10 shirt for the 2008–09 season. During that season, Messi, alongside Samuel Eto'o and Thierry Henry, contributed to a total of 100 goals in all competitions, a record at the time for the club.</p>
        </div>

        <div class="text-center">
            <img src="https://media.cnn.com/api/v1/images/stellar/prod/210927174224-pep-guardiola-lionel-messi.jpg?q=w_2835,h_1890,x_0,y_0,c_fill" alt="Stats">
            <h1>Stats</h1>
            <p>During his first season under Barcelona's new manager, former captain Pep Guardiola, Messi played as a false nine for the first time on 2 May 2009 in a Clásico. He scored twice and assisted once in a 6–2 victory, the team's greatest-ever score at Real Madrid's Santiago Bernabéu Stadium. He played his first final on 19 May, winning the Copa del Rey. Barcelona became the first club to achieve the sextuple. In addition to the Copa del Rey, Barcelona won the La Liga title and later won the Champions League, Supercopa de España, UEFA Super Cup and FIFA Club World Cup in the second half of 2009. Messi finished as the Champions League top scorer, the youngest in the tournament's history. For his efforts in 2009, Messi won the Ballon d'Or and the FIFA World Player of the Year award. In the new year of the 2009–10 season, Messi scored a total of 47 goals in all competitions, equaling Ronaldo's club record from the 1996–97 campaign. He finished the season as top scorer in the Champions League, and La Liga, winning his second consecutive league trophy and earned his first European Golden Shoe. In the 2010–11 campaign, Messi won the Supercopa de España, Champions League, and a third consecutive La Liga title. Messi was the top scorer in the Champions League, for the third consecutive year, and the league's top scorer and assist provider. He became Barcelona's all-time single-season top scorer with 53 goals.</p>
        </div>

        <div class="text-center">
            <img src="https://bolavip.com/__export/1631580150664/sites/bolavip/img/2021/09/13/messi_ucl_2015.jpg_1546398727.jpg" alt="Season">
            <h1>Season</h1>
            <p>During the 2011–12 season, Messi scored 73 goals and provided 29 assists in all club competitions. He began the campaign winning both the Spanish and European Super Cups trophies. At the close of the year, he won the FIFA Club World Cup and earned the Golden Ball for a second time. For his efforts in 2011, he received the FIFA Ballon d'Or, becoming only the fourth player in history to win the Ballon d'Or three times, and the inaugural UEFA Best Player in Europe Award. During the year 2012, Messi became the second player to be top scorer in four Champions League campaigns. On 20 March, Messi became the top goalscorer in Barcelona's history at 24 years old with a hat-trick against Granada. He finished the season as league top scorer in Spain and Europe for a second time, with 50 goals, a La Liga record, while his 73 goals in all competitions made him the single-season top scorer in the history of European club football. Guardiola resigned that season after a four-year cycle of success. A double scored on 9 December against Real Betis saw Messi becoming Barcelona's all-time top scorer in La Liga, and surpassed Gerd Müller's record of most goals scored in a calendar year. At the close of the year, Messi had scored a record 91 goals in all competitions for Barcelona and Argentina. Messi again won the FIFA Ballon d'Or, becoming the only player in history to win the Ballon d'Or four times.</p>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>
