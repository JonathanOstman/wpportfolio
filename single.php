<?php get_header(); ?>
<?php if (is_single('lampswitch')) : ?>
<body>
  <div>
    <i class="fa fa-power-off" aria-hidden="true"></i>
  </div>
<script>
$("div").click(function() {
  $("body").toggleClass("on");
});
</script>
<?php elseif (is_single('pong-game')) : ?>
<body>
<canvas id="gameCanvas" width="800" height="575"></canvas>
<div class="wrapper">
<div class="score" id="score1"></div>
<div class="score" id="score2"></div>
<?php elseif (is_single('top-10-games')) : ?>
  <body>
    <h1 class="header">My top 10 games!</h1>

    <table>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Publisher</th>
      </tr>
      <tr>
        <td>1.</td>
        <td>League of Legends</td>
        <td>Riot Games</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Counter-Strike: Global Offensive</td>
        <td>Valve</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Overwatch</td>
        <td>Blizzard</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Terraria</td>
        <td>Re-Logic</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Batman: Arkham Knight</td>
        <td>WB games</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>The Elder Scrolls V: Skyrim</td>
        <td>Bethesda</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Battlefield: Bad Company 2</td>
        <td>Electronic Arts</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>Middle Earth: Shadow of Mordor</td>
        <td>WB games</td>
      </tr>
      <tr>
        <td>9.</td>
        <td>Assassin's Creed IV Black Flag</td>
        <td>Ubisoft</td>
      </tr>
      <tr>
        <td>10.</td>
        <td>Dirt 3</td>
        <td>Codemasters</td>
      </tr>

    </table>
<?php endif; ?>

<?php get_footer(); ?>
