<?php
echo <<< _END
<html>
  <body>
    <h1 align='center'>Welcom to Moving Target Defense Lab</h1>
    <p align='center'>Mission Plan Scenario</p>
    <form style="text-align:center" method="post" action="query_target.php"/>
      Query TargetDB
      <input type = "submit" />
    </form>
    <form style="text-align:center" method="post" action="query_asset.php"/>
      Query AssetDB
      <input type = "submit" />
    </form>
    <form style="text-align:center" method="post" action="query_geo.php"/>
      Query GeoDB
      <input type = "submit" />
    </form>
  </body>
</html>
_END;
?>
