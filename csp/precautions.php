<?php
$choosen= $_POST["precautions"];
?>
<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title> Precautions of <?php echo $choosen;?> </title>
</head>
<style>
    body{
        background-color: #63c8f2;
    }
</style>
<body>
<?php
if($choosen=="tinea pedis")
{
    ?>
<h1 align="Center" style="color: whitesmoke"> <?php echo"The precautions of the $choosen"; ?></h1>
<h2>
 <?php echo 
    "* Keep feet clean, dry, and cool.<br>
     * Avoid using swimming pools, public showers, or foot baths.<br>
     * Wear sandals when possible or air shoes out by alternating them every 2-3 days.<br>
     * Avoid wearing closed shoes and wearing socks made from fabric that doesn't dry easily (for example, nylon).";?>
     </h2>
<?php 
}
elseif($choosen=="Tooth Decay")
{
    ?>
    <h1 align="Center" style="color: whitesmoke"> <?php echo"The precautions of the $choosen"; ?></h1>
    <h2>
        <?php
        echo "
    * Tooth decay is a diet-related disease. 
    * It is caused by the bacteria in your mouth turning sugar into energy and producing acid that damages the teeth.<br>
    * Tooth decay can start as a white or dark spot on your tooth and develop into a hole.<br>
    * The saliva in your mouth helps protect against tooth decay and can repair tooth decay in its early stages.<br>
    * If you have a dry mouth (because of some medical conditions, or using certain medications or drugs) your risk of developing tooth decay is higher.<br>
    * You can prevent tooth decay by eating a healthy diet, drinking plenty of tap water instead of sugary drinks, brushing your teeth twice<br>
      a day using a fluoride toothpaste, and flossing once a day.<br>
    * Tooth decay should be treated by a dentist to prevent it from getting worse. If you visit your dentist regularly (every 6 to 12 months)<br>
      tooth decay can be detected early before it needs a filling.<br>";?>
    </h2>
<?php
}
elseif($choosen=="Folliculitis")
{
    ?>
  <h1 align="Center" style="color: whitesmoke"> <?php echo"The precautions of the $choosen"; ?></h1>
    <h2>
        <?php echo"
     * Wash your skin regularly. ...<br>
     * Do laundry regularly. ...<br>
     * Avoid friction or pressure on your skin. ...<br>
     * Dry out your rubber gloves between uses. ...<br>
     * Avoid shaving, if possible. ...<br>
     * Keep the skin clean using soap, water, and mild skin cleansers....<br>";?>
    </h2>
<?php }
elseif($choosen=='Lymphatic Filariasis')
{
    ?>
  <h1 align="Center" style="color: whitesmoke"> <?php echo"The precautions of the $choosen"; ?></h1>
  <h2>
        <strong> <?php echo "The disease spreads from person to person by mosquito bites....<br>";?></strong>
        <?php echo"
        * Currently there are no vaccines available for filariasis, so preventing mosquito bites will<br>
          be the best form of defence. Some other steps you can take are: <br>
        * Refrain from going outdoors at dusk or dawn when the mosquitoes that transmit filariasis are highly active<br> 
          Cover yourself with long sleeved shirts and trousers....<br>
        * Refrain from sporting strong perfume or cologne which can draw the attention of mosquitoes..<br> 
        * Sleep inside an insecticide-treated or plain mosquito net.. <br>
        * Use mosquito repelling or mosquito killing products such as the Mortein Insta Vapourizer, designed to start..<br>
          knocking down mosquitoes within 5 minutes of being activated. Remove the cap, insert the liquid vaporiser bottle<br>
          into the electric heating machine and plug into an outlet.";?>
    </h2>
<?php }
elseif($choosen=='Ringworm')
{ 
    ?>
    <h1 align="Center" style="color: whitesmoke"> <?php echo"The precautions of the $choosen"; ?></h1>
    <h2>
        <?php echo"
    * Keep your skin clean and dry.<br>
    * Wear shoes that allow air to circulate freely around your feet.<br>
    * Don't walk barefoot in areas like locker rooms or public showers.<br>
    * Clip your fingernails and toenails short and keep them clean.<br>
    * Change your socks and underwear at least once a day.<br>";?>
    </h2>
    <?php
}
elseif($choosen=='Scabies')
{
    ?>
    <h1 align="Center" style="color: whitesmoke"> <?php echo"The precautions of the $choosen"; ?></h1>
    <h2>
   <?php echo"
    * Wash all clothes, bedding, and towels used within 3 days before beginning your treatment in hot, soapy water.<br>
    * Dry them on high heat. Dry clean items you can’t wash at home.<br>
    * Place items you can’t wash, like stuffed animals and upholstery, in a sealed plastic bag and stow away for at least<br>
      72 hours. This will starve the mites.<br>
      Clean and vacuum each room in your home, then throw away the vacuum cleaner bag.<br>
    * Scabies is prevented by avoiding direct skin-to-skin contact with an infested person or with items <br>
      such as clothing or bedding used by an infested person.<br>";?>
<?php
}
elseif($choosen=='none')
{
    ?>
    <h1 align="center" style="color: whitesmoke"><strong>We will try to gather more information</strong></h1>
<?php
}
?>
<h4 style="position:absolute;bottom:10px;right:10px;color: whitesmoke;" ><strong>We recommond you to Doctor if you get affected</strong></h4>
</body>
</html>