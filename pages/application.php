<?php
//Application page
connect_mysql();
?>
<pre>
<h3>RL Information:</h3>
Your RL name?           <input type='text' id='rlname'></input>
Your age?               <input type='text' id='rlage'></input>
Your Nationality ?      <input type='text' id='rlnationality'></input>
Timezone you live in ?  <!-- drop down field here -->
<br />
<h3>Character information:</h3>
Your character name ?   <input type='text' id='charname'></input>
Character level ?       <!-- drop down field with: 90, 85 - 89, 80 - 84, 1 - 79 -->
Race and Class          <!-- drop down field -->
Primary spec role       <!-- radio buttons, tank, healer, ranged dps, melee dps -->
Secondary spec          <!-- Tank, Healer, Ranged DPS, Melee DPS, PVP spec -->
Are you willing to respec ? <!-- yes, no. If no reason -->
Applying for?           <!-- Raider spot, casual spot, PVP spot -->
Total time played on lvl 90 <input type='text' id='chartimeplayed90'></input>
Any additional information <textarea id="charaddinfo" cols="45" rows="15">
    
</textarea>
<h3>Alt char information:</h3>
Do you have any alts <!-- yes, no and if yes more options -->
Do you want us to invite your alts to the guild <!-- radio button yes/no -->
<!-- in case of no ask names, etc -->

<h3>Previous guild(s)</h3>
Have you been in a(ny) other guild(s)? <!-- yes/no -->
If yes, why did you leave?
</pre>