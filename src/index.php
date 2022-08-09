<?php 

    $arr = array(
        'Adjusted' => array(
            array(
                'Quater' => '1st quater 2010(p)',
                'retail sales' => array(
                    'total' => 960474,
                    'Ecommerce' => 38707
                ),
                'Ecommerce'=>4.0,
                'Change'=> array(
                    'total' => 2.0,
                    'Ecommerce'=>1.5
                ),
                'Change_ago'=> array(
                    'total' =>6.3,
                    'Ecommerce'=>14.3
                )
            ),
            array(
                'Quater' => '4th quater 2000(r)',
                'retail sales' => array(
                    'total' => 941335,
                    'Ecommerce' => 38141
                ),
                'Ecommerce'=>4.1,
                'Change'=> array(
                    'total' => 2.0,
                    'Ecommerce'=>4.2
                ),
                'Change_ago'=> array(
                    'total' =>2.1,
                    'Ecommerce'=>14.6
                )
            ),
            array(
                'Quater' => '3rd quater 2009',
                'retail sales' => array(
                    'total' => 922763,
                    'Ecommerce' => 36587
                ),
                'Ecommerce'=>4.0,
                'Change'=> array(
                    'total' => 2.1,
                    'Ecommerce'=>5.1
                ),
                'Change_ago'=> array(
                    'total' =>-7.8,
                    'Ecommerce'=>1.7
                )
            ),
            array(
                'Quater' => '2nd quater 2009',
                'retail sales' => array(
                    'total' => 904045,
                    'Ecommerce' => 34827
                ),
                'Ecommerce'=>3.9,
                'Change'=> array(
                    'total' => 0.0,
                    'Ecommerce'=>2.8
                ),
                'Change_ago'=> array(
                    'total' =>-11.1,
                    'Ecommerce'=>-4.8
                )
            ),
            array(
                'Quater' => '1st quater 2009(r)',
                'retail sales' => array(
                    'total' => 903718,
                    'Ecommerce' => 33865
                ),
                'Ecommerce'=>3.7,
                'Change'=> array(
                    'total' => -2.0,
                    'Ecommerce'=>1.7
                ),
                'Change_ago'=> array(
                    'total' =>-10.7,
                    'Ecommerce'=>-6.6
                )
            )
        ),
        'Not Adjusted' => array(
            array(
                'Quater' => '1st quater 2010(p)',
                'retail sales' => array(
                    'total' => 897004,
                    'Ecommerce' => 36638
                ),
                'Ecommerce'=>4.1,
                'Change'=> array(
                    'total' => -9.0,
                    'Ecommerce'=>-18.9
                ),
                'Change_ago'=> array(
                    'total' =>6.8,
                    'Ecommerce'=>14.0
                )
            ),
            array(
                'Quater' => '4th quater 2009(r)',
                'retail sales' => array(
                    'total' => 985649,
                    'Ecommerce' => 45199
                ),
                'Ecommerce'=>4.6,
                'Change'=> array(
                    'total' => -9.0,
                    'Ecommerce'=>-18.9
                ),
                'Change_ago'=> array(
                    'total' =>6.8,
                    'Ecommerce'=>15.0
                )
            ),
            array(
                'Quater' => '3rd quater 2009',
                'retail sales' => array(
                    'total' => 926265,
                    'Ecommerce' => 34031
                ),
                'Ecommerce'=>3.7,
                'Change'=> array(
                    'total' => 0.7,
                    'Ecommerce'=>3.9
                ),
                'Change_ago'=> array(
                    'total' =>-8.0,
                    'Ecommerce'=>1.6
                )
            ),
            array(
                'Quater' => '2nd quater 2009',
                'retail sales' => array(
                    'total' => 919646,
                    'Ecommerce' => 32769
                ),
                'Ecommerce'=>3.6,
                'Change'=> array(
                    'total' => 9.5,
                    'Ecommerce'=>2.0
                ),
                'Change_ago'=> array(
                    'total' =>-11.0,
                    'Ecommerce'=>-4.2
                )
            ),
            array(
                'Quater' => '1st quater 2009(r)',
                'retail sales' => array(
                    'total' => 839625,
                    'Ecommerce' => 32125
                ),
                'Ecommerce'=>3.8,
                'Change'=> array(
                    'total' => -13.1,
                    'Ecommerce'=>18.3
                ),
                'Change_ago'=> array(
                    'total' =>-11.9,
                    'Ecommerce'=>-7.0
                )
            )
        )
    );


    echo "<table class='tab'>
            <tr>
                <th rowspan='2'>Quater</th>
                <th colspan='2'>Retail Sales <br> (millions of dollar)</th>
                <th rowspan='2'>Ecommerce <br> as a percent <br> of <br> Total</th>
                <th colspan='2'>Percent Change <br> from prior Quater</th>
                <th colspan='2'>Percent Change <br> from same Quater <br> a year ago</th>
            </tr>
            <tr>
                <th>Total</th>
                <th>Ecommerce</th>
                <th>Total</th>
                <th>Ecommerce</th>
                <th>Total</th>
                <th>Ecommerce</th>
            </tr>
            ";

    foreach ($arr as $key=>$val){
        echo  "<tr style='text-align:left'>
                <th colspan='8'>$key</th>
              </tr>";
        
        foreach ($val as $item){
            echo "<tr>
                    <td>".$item['Quater']."</td>
                    <td>".$item['retail sales']['total']."</td>
                    <td>".$item['retail sales']['Ecommerce']."</td>
                    <td>".$item['Ecommerce']."</td>
                    <td>".$item['Change']['total']."</td>
                    <td>".$item['Change']['Ecommerce']."</td>
                    <td>".$item['Change_ago']['total']."</td>
                    <td>".$item['Change_ago']['Ecommerce']."</td>
                 </tr>";
        }
        
    }
    echo "</table>";

    $res = 0;
    foreach ($arr['Adjusted'] as $item){
        $res+=$item['retail sales']['Ecommerce'];
    }
    echo "<h1>Average Sale of E-commerce in Adjusted is : ".$res/sizeof($arr['Adjusted'])." </h1>";
    $res = 0;
    foreach ($arr['Not Adjusted'] as $item){
        $res+=$item['retail sales']['Ecommerce'];
    }
    echo "<h1>Average Sale of E-commerce in Not Adjusted is : ".$res/sizeof($arr['Not Adjusted'])." </h1>";

?>
<style>
    .tab , td, th{
        border:solid 1px black;
        padding:1vw;
        border-collapse: collapse;
    }
    th{
        
    }
    .tab{
        /* color:white; */
        background-color:#CACACA;
        text-align: center;
        width:100%;
    }
    </style>