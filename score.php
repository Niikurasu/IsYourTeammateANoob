<?php

            $username = $_POST["username"];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.fortnitetracker.com/v1/profile/pc/{$username}");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'TRN-Api-Key: 78d9cdf2-5e59-433f-9116-05dbd02e6564'
            ));

            $response = curl_exec($ch);
            curl_close($ch);
            $fp = fopen("stats.json", "w");
            fwrite($fp, $response);
            fclose($fp);
            $data = json_decode(file_get_contents("stats.json"));
            $solo = $data->stats->p2;//solos data
            $duos = $data->stats->p10;//duos data
            $squads = $data->stats->p9;//squads data
            $solo_wins = $solo->top1->valueInt;
            $duos_wins = $duos->top1->valueInt;
            $squads_wins = $squads->top1->valueInt;
            $solo_matches = $solo->matches->valueInt;
            $duos_matches = $duos->matches->valueInt;
            $squads_matches = $squads->matches->valueInt;
            $solo_kd = $solo->kd->valueDec;
            $duos_kd = $duos->kd->valueDec;
            $squads_kd = $squads->kd->valueDec; 

            $average_kd = ($solo_kd + $duos_kd + $squads_kd) / 3;
            $winrate = ($solo_wins + $duos_wins + $squads_wins) / ($solo_matches + $duos_matches + $squads_matches);
            $score = $average_kd * $winrate * 100;
            $score = round($score, 1);
            $message = "Error";
            if($score >= 4)
            {
                $message = "Not a noob ;D";
            }else {
                $message = "Noob alert!!!";
            }
            print("
            <link rel=\"stylesheet\" type=\"text/css\" href=\"Styles/style.css\">
            <center>
                    <h1>
                        {$message}
                        <br><br><br>
                        Your score is {$score}<br><br><br>
                        Your KD is {$average_kd}<br><br><br>
                        Your Winrate is {$winrate}<br><br><br>
                    </h1>
            </center>
            ")




?>