<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Pulga</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

<style>
    /* Reset some basic styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'DM Serif Text', serif;
    line-height: 1.6;
    color: #333;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 20px 0;
}

.heading {
    font-size: 2.5em;
    margin-bottom: 10px;
    color: #444;
}

.leo-info {
    font-size: 1.125em;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #666;
}

/* Responsive layout */
@media (max-width: 768px) {
    .heading {
        font-size: 2em;
    }

    .leo-info {
        font-size: 1em;
    }
}

/* Add some styling for the header and footer */
header, footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

header a, footer a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
}

header a:hover, footer a:hover {
    text-decoration: underline;
}
</style></head>
<body>
   <div class="container">
   <?php 
    include("header.php");
    ?>
    <div>
<img src="https://assets.goal.com/images/v3/blt321d662dc0063325/64a734450076eb42cf8cd97eb52abd89d00f5482.jpeg" alt="">
<h1 class="heading" >Personal Information :</h1>  
<p class="leo-info">Lionel Andrés "Leo" Messi[note 1] (Spanish pronunciation: [ljoˈnel anˈdɾes ˈmesi] ⓘ; born 24 June 1987) is an Argentine professional footballer who plays as a forward for and captains both Major League Soccer club Inter Miami and the Argentina national team. Widely regarded as one of the greatest players of all time, Messi has won a record eight Ballon d'Or awards, a record six European Golden Shoes, and was named the world's best player for a record eight times by FIFA.[note 2] Messi is the most decorated player in the history of professional football, with 44 team trophies.[note 3] Until 2021, he had spent his entire professional career with Barcelona, where he won a club-record 34 trophies, including ten La Liga titles, seven Copa del Rey titles, and the UEFA Champions League four times. Playing for Argentina's national team, he won two Copa América titles and the 2022 FIFA World Cup. A prolific goalscorer and creative playmaker, Messi holds the records for most goals (474), hat-tricks (36), and assists (192) in La Liga, most appearances (39) and assists (18) in the Copa América. He has the most international goals (109) and appearances (187) by a South American male. Messi has scored over 800 senior career goals for club and country, and the most goals for a single club (672).</p>
</div>
<div>
    <img src="https://media.newyorker.com/photos/639e08e6cc36533190988999/master/w_2560%2Cc_limit/Messi%2520Walking_Web%2520Use.jpg" alt="">
<h1 class="heading">Early Life :</h1>
<p class="leo-info">Messi relocated to Spain and joined Barcelona aged 13, making his competitive debut at age 17 in October 2004. He established himself as an integral player for the club within the next three years, and in his first uninterrupted season in 2008–09 helped Barcelona achieve the first treble in Spanish football; that year, aged 22, Messi won his first Ballon d'Or. Messi won four consecutive Ballons d'Or, the first player to win it four times. During the 2011–12 season, he set La Liga and European records for most goals in a season, while establishing himself as Barcelona's all-time top scorer. The following two seasons, he finished second for the Ballon d'Or behind Cristiano Ronaldo, his perceived career rival, before regaining his best form during the 2014–15 campaign, becoming the all-time top scorer in La Liga and leading Barcelona to a historic second treble, and was awarded a fifth Ballon d'Or in 2015. Messi assumed captaincy of Barcelona in 2018, and won a record sixth Ballon d'Or in 2019. He signed for French club Paris Saint-Germain in August 2021, spending two seasons there and winning Ligue 1 twice. Messi joined American club Inter Miami in July 2023, winning the Leagues Cup in August.</p>
</div>
<img src="https://imgresizer.eurosport.com/unsafe/2560x1440/filters:format(jpeg)/origin-imgresizer.eurosport.com/2023/10/30/3815800-77567928-2560-1440.jpg" alt="">
<h1 class="heading">Greatness :</h1>
<p class="leo-info">An Argentine international, Messi is the country's all-time leading goalscorer and holds the national record for appearances. At youth level, he won the 2005 FIFA World Youth Championship and gold at the 2008 Summer Olympics. His style of play as a diminutive, left-footed dribbler drew comparisons with compatriot Diego Maradona, who described Messi as his successor. After his senior debut in 2005, Messi became the youngest Argentine to play and score in a FIFA World Cup (2006). As the squad's captain from 2011, he led Argentina to three consecutive finals: the 2014 FIFA World Cup, the 2015 Copa América and the 2016 Copa América. After announcing his international retirement in 2016, he returned to lead his country to qualification for the 2018 FIFA World Cup and victory in the 2021 Copa América. He led Argentina to win the 2022 World Cup, where he won a record second Golden Ball, scored seven goals including two in the final, and broke the record for most games played at the World Cup (26), later receiving his record-extending eighth Ballon d'Or in 2023. He then won a second Copa América as captain in 2024.</p>
</div>
    <?php 
    include("footer.php");
    ?>
   </div>
</body>
</html>