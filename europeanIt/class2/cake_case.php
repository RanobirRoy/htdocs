<?php
    echo ("<h1> Cake flavor types : </h1>");
    $cake1 = 'Black forest';
    $cake2 = 'Vanilla cake';
    $cake3 = 'Red Velvet';
    $cake4 = 'Lemon Sponge Cake';
    $cake5 = 'Chocolate Cake';
    // echo $cake1."<br>";
    // echo $cake2."<br>";
    // echo $cake3."<br>";
    // echo $cake4."<br>";
    // echo $cake5."<br>";
    echo ($cake1."<br>".$cake2."<br>".$cake3."<br>".$cake4."<br>".$cake5);

    $meterial_c_b_f = 180;
    $meterial_c_v_c = 150;
    $meterial_c_r_v = 220;
    $meterial_c_l_c = 165;
    $meterial_c_c_c = 170;

    // Transportation cost

    $t_c = 150;

    // Space cost

    $s_c = 50;

    // Staff cost

    $staff_c = 60;

    // Total cost

    $total_c_b_f = ($meterial_c_b_f + $t_c);
    $total_c_v_c = ($meterial_c_v_c + $t_c);
    $total_c_r_v = ($meterial_c_r_v + $t_c);
    $total_c_l_c = ($meterial_c_l_c + $t_c);
    $total_c_c_c = ($meterial_c_c_c + $t_c);

    // Utility Cost

    $u_c_b_f = ($total_c_b_f * 3) / 100;
    $u_c_v_c = ($total_c_v_c * 3) / 100;
    $u_c_r_v = ($total_c_r_v * 3) / 100;
    $u_c_l_c = ($total_c_l_c * 3) / 100;
    $u_c_c_c = ($total_c_c_c * 3) / 100;

    echo ("<h2>Total Cost of each Cake :</h2>");

    echo ($cake1.' : '.($total_c_b_f + $u_c_b_f + $s_c + $staff_c)."<br>".$cake2.' : '.($total_c_v_c + $u_c_v_c + $s_c + $staff_c)."<br>".$cake3.' : '.($total_c_r_v + $u_c_r_v + $s_c + $staff_c)."<br>".$cake4.' : '.($total_c_l_c + $u_c_l_c + $s_c + $staff_c)."<br>".$cake5.' : '.($total_c_c_c + $u_c_c_c + $s_c + $staff_c));

    // Other Discounted Price list Programs
    // Updated Price list

    $b_f = 780;
    $v_c = 600;
    $r_v = 800;
    $l_c = 650;
    $c_c = 660;

    echo ("<h2>Updated Prise List :</h2>");

    echo ($cake1.' : '.($b_f)."<br>".$cake2.' : '.($v_c)."<br>".$cake3.' : '.($r_v)."<br>".$cake4.' : '.($l_c)."<br>".$cake5.' : '.($c_c));

    $discounted_b_f = ($b_f - ($b_f * 5) / 100);
    $discounted_v_c = ($v_c - ($v_c * 5) / 100);
    $discounted_r_v = ($r_v - ($r_v * 5) / 100);
    $discounted_l_c = ($l_c - ($l_c * 7) / 100);
    $discounted_c_c = ($c_c - ($c_c * 7) / 100);

    echo ("<h2>Discounted Prise List :</h2>");

    echo ($cake1.' : '.($discounted_b_f)."<br>".$cake2.' : '.($discounted_v_c)."<br>".$cake3.' : '.($discounted_r_v)."<br>".$cake4.' : '.($discounted_l_c)."<br>".$cake5.' : '.($discounted_c_c));
?>