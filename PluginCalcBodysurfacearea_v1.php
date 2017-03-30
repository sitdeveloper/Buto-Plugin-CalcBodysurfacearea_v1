<?php
/**
<p>
 Body Surface Area calculator.
</p>
 */
class PluginCalcBodysurfacearea_v1{
  /**
   * Mosteller formel.<br>
   * Calculate Body Surface Area.<br>
   * (weight ^ 0,5) * (height ^ 0,5) / 60 = BSA<br>
   * (69 ^ 0,5) * (178 ^ 0,5) / 60 = 1.84706975144 = BSA<br>
   * (69 ^ 0,5) * (178 ^ 0,5) / 60 = 8.3066 * 13.3417 / 60 = 1.84706975144 = BSA<br>
   */
  public static function calcBsa($weight = null, $height = null, $round = null){
    if($weight && $height){
      $value = pow($weight, 0.5) * pow($height, 0.5) / 60;
      if(!$round){
        return $value;
      }else{
        return round($value, $round);
      }
    }else{
      return null;
    }
  }
}