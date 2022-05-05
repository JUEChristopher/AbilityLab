<?php

switch($match['params']['type']){
    case "skill":
        // Compétence | Bloc 1
        $req_B1 = $db -> query("SELECT N_ITEM_COMPETENCE, LIBEL_ITEM FROM item_competence WHERE N_ITEM_COMPETENCE LIKE 'B1%'");
        $result_B1 = $req_B1 -> fetchAll();

        // Compétence | Bloc 2
        $req_B2 = $db -> query("SELECT N_ITEM_COMPETENCE, LIBEL_ITEM FROM item_competence WHERE N_ITEM_COMPETENCE LIKE 'B2%'");
        $result_B2 = $req_B2 -> fetchAll();

        // Compétence | Bloc 3
        $req_B3 = $db -> query("SELECT N_ITEM_COMPETENCE, LIBEL_ITEM FROM item_competence WHERE N_ITEM_COMPETENCE LIKE 'B3%'");
        $result_B3 = $req_B3 -> fetchAll();

        $type = "COMPETENCE";
        $title = "Compétence";
        break;

    case "knowledge":
        // Savoir | Bloc 1
        $req_B1 = $db -> query("SELECT N_ITEM_SAVOIR, LIBEL_ITEM FROM item_savoir WHERE N_ITEM_SAVOIR LIKE 'S1%'");
        $result_B1 = $req_B1 -> fetchAll();

        // Savoir | Bloc 2
        $req_B2 = $db -> query("SELECT N_ITEM_SAVOIR, LIBEL_ITEM FROM item_savoir WHERE N_ITEM_SAVOIR LIKE 'S2%'");
        $result_B2 = $req_B2 -> fetchAll();

        // Savoir | Bloc 3
        $req_B3 = $db -> query("SELECT N_ITEM_SAVOIR, LIBEL_ITEM FROM item_savoir WHERE N_ITEM_SAVOIR LIKE 'S3%'");
        $result_B3 = $req_B3 -> fetchAll();

        $type = "SAVOIR";
        $title = "Savoir";
        break;

    case "indicator":
        // Indicateur | Bloc 1
        $req_B1 = $db -> query("SELECT N_ITEM_INDICATEUR, LIBEL_ITEM FROM item_indicateur WHERE N_ITEM_INDICATEUR LIKE 'P1%'");
        $result_B1 = $req_B1 -> fetchAll();

        // Indicateur | Bloc 2
        $req_B2 = $db -> query("SELECT N_ITEM_INDICATEUR, LIBEL_ITEM FROM item_indicateur WHERE N_ITEM_INDICATEUR LIKE 'P2%'");
        $result_B2 = $req_B2 -> fetchAll();

        // Indicateur | Bloc 3
        $req_B3 = $db -> query("SELECT N_ITEM_INDICATEUR, LIBEL_ITEM FROM item_indicateur WHERE N_ITEM_INDICATEUR LIKE 'P3%'");
        $result_B3 = $req_B3 -> fetchAll();

        $type = "INDICATEUR";
        $title = "Indicateur";
        break;
}

// $push_data = $db -> query("SELECT N_ITEM_COMPETENCE, LIBEL_ITEM FROM item_competence WHERE N_ITEM_COMPETENCE LIKE 'B1%'");
// $result_B1 = $req_B1 -> fetchAll();

?>

<title>AbiltyLab | <?= $title . "s" ?></title>

<a id="view_btn" href="<?php strtolower($type) ?>">Mes <?= $title . "s"?></a>


<form id="skill_form" method="POST">

    <h2 id="title_one"><?= $title ?> | Bloc 1</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Libelé</th>
                <th>Etat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result_B1 as $data): ?>
            <tr>
                <td><?= $data["N_ITEM_$type"] ?></td>
                <td><?= $data["LIBEL_ITEM"] ?></td>
                <td><select name="" class="state">
                    <option value="">Non acquise</option>
                    <option value="">Mise en œuvre</option>
                    <option value="">En cours d'acquisition</option>
                    <option value="">Acquise</option>
                </select></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2><?= $title ?> | Bloc 2 SLAM</h2>

    <table class="table">
        <thead>
            <th>Identifiant</th>
            <th>Libelé</th>
            <th>Etat</th>
        </thead>
        <tbody>
            <?php foreach($result_B2 as $data): ?>
            <tr>
                <td><?= $data["N_ITEM_$type"] ?></td>
                <td><?= $data["LIBEL_ITEM"] ?></td>
                <td><select name="" class="state">
                    <option value="">Non acquise</option>
                    <option value="">Mise en œuvre</option>
                    <option value="">En cours d'acquisition</option>
                    <option value="">Acquise</option>
                </select></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2><?= $title ?> | Bloc 3 SISR</h2>

    <table class="table">
        <thead>
            <th>Identifiant</th>
            <th>Libelé</th>
            <th>Etat</th>
        </thead>
        <tbody>
            <?php foreach($result_B3 as $data): ?>
            <tr>
                <td><?= $data["N_ITEM_$type"] ?></td>
                <td><?= $data["LIBEL_ITEM"] ?></td>
                <td><select name="" class="state">
                    <option value="Non acquise">Non acquise</option>
                    <option value="Mise en œuvre">Mise en œuvre</option>
                    <option value="En cours d'acquisition">En cours d'acquisition</option>
                    <option value="Acquise">Acquise</option>
                </select></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <button id="save_btn" type="submit"><i class="fa-solid fa-floppy-disk"></i></button>
</form>
