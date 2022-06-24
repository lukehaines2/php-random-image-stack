%%[[if edit]]%%
<div style="text-align: center;">
<p>This RandomImage stack is configured to pick one image at random from: <strong>%id=dir_path -href%</strong></p>
<p>For standard resolution images, only images starting <strong>%id=prefix%</strong> and ending in <strong>%id=extension%</strong> will be considered.</p>
%[if %("%id=retina%" == "true")% ]%
<p>For retina-display optimised images, only images starting <strong>%id=prefix%</strong> and ending in <strong>%id=retina_extension%</strong> will be considered.</p>
%[endif]%
<p>One image between (or including) <strong>%id=prefix%%id=range_array[0]%%id=extension%</strong> and <strong>%id=prefix%%id=range_array[1]%%id=extension%</strong> will be picked at random for display.</p>
<p>The image displayed will have an ALT attribute of: <strong>%id=alt_text%</strong></p>
</div>
%%[[endif]]%%

%%[[if !edit]]%%
  %[if %("%id=placement%" == "extracontent")% ]%<div id="myExtraContent%id=ec_number%">%[endif]%
  %[if %("%id=placement%" == "freestyle")% ]%<div id="random-image-container">%[endif]%
  %[if %("%id=placement%" == "normal")% ]%<div>%[endif]%
    %[if %("%id=link%" == "true")% ]%%id=link_address%%[endif]%
      <img style="max-width: 100%; border: 1px solid red; max-height: 312px" 
      src="%id=dir_path -href%%id=prefix%<?php echo rand(%id=range_array[0]%,%id=range_array[1]%)?>%id=extension%" alt="%id=alt_text%" %[if %("%id=retina%" == "true")% ]%srcset="%id=dir_path -href%%id=prefix%<?php echo rand(%id=range_array[0]%,%id=range_array[1]%)?>%id=retina_extension% 2x"%[endif]%>
    %[if %("%id=link%" == "true")% ]%%id=link_address%%[endif]%
  </div>
%%[[endif]]%%

<?php
  include 'session.php';
  echo '<script>console.log("Printing global session", ' . json_encode($_SESSION['img']) . ')</script>';
?>
