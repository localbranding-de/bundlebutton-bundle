
<?php
/**
 * Table tl_ls_shop_variant
 */

//Legenden hinzuf�gen
$GLOBALS['TL_DCA']['tl_ls_shop_variant']['palettes']['default']=str_replace('useScalePrice,','lb_sellingUnit,lb_isDiscount,useScalePrice,',$GLOBALS['TL_DCA']['tl_ls_shop_variant']['palettes']['default'] );



$GLOBALS['TL_DCA']['tl_ls_shop_variant']['fields']['lb_sellingUnit'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lb_sellingUnit'],
    'inputType' => 'text',
    'eval'      => array('tl_class'=>'w50'),
    'sql'       => "int(10) NOT NULL default '1'"
);


$GLOBALS['TL_DCA']['tl_ls_shop_variant']['fields']['lb_isDiscount']= array
(
    'label'			=> &$GLOBALS['TL_LANG']['tl_ls_shop_variant']['lb_isDiscount'],
    'exclude' 		=> true,
    'eval'      => array( 'feEditable'=>true, 'feViewable'=>true,'tl_class'=>'long'),
    'inputType' => 'checkbox',
    'sql'       => "char(1) NOT NULL default ''"
);


class tl_lb_variant_class extends Backend
{

    
    
}
