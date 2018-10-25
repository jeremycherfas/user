<?php
namespace Grav\Plugin;
class MymapTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'MymapTwigExtension';
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('mymap', [$this, 'mymapFunction'])
        ];
    }
    public function mymapFunction($data)
    {
      $dataarray = json_decode($data, true);
      $myarray = ($dataarray['features']); // element [2] all the stuff
      $mytitle = ($dataarray['properties']['title']); // gets the 'title' element of the 'properties' element
      $myproperties = ($myarray[0]);
      $mytime = ($myproperties['properties']['time']); // gets the 'time' element of the 'properties' of the first element of $array
      $mysummaries = ($myproperties['properties']['summaryStatistics']); // An array, everything there

      $properties = array('title'=>$mytitle, 'time'=>$mytime, 'summaries'=>$mysummaries); // can only return one thing

      return $properties;    }
}
