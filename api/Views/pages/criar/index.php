<?php $systemType = $this->getData()['systemType'] ?>
<h1>Criar <?= $systemType ?></h1>
<form>
    <h2>Adicione conteúdos a sua lista:</h2>
    <div>
        <label for="input-content">Conteúdo/Matéria:</label>
        <input type="text" name="content" id="input-content">
    </div>
    <div>
        <label for="select-difficulties">O quão bom você é nesse conteúdo:</label>
        <select name="difficulties" id="select-difficulties">
            <option selected disabled>Selecione</option>
            <option class="difficulty-option">Muito bom</option>
            <option class="difficulty-option">Bom</option>
            <option class="difficulty-option">Razoável</option>
            <option class="difficulty-option">Ruim</option>
            <option class="difficulty-option">Muito ruim</option>
        </select>
    </div>
    <?php $this->loadViewInTemplate("criar/$systemType", ['TipoDoSistema' => $systemType.'_teste']) ?>
    <input type="button" value="Adicionar conteúdo">
</form>
<section>
    <h2>Conteúdos adicionados:</h2>
    <table id="contents-table"></table>
</section>
<form action="">
    <h2>Finalizar <?= $systemType ?></h2>
    <div>
        <label for="input-hours-per-day">Quantidade de horas por dia para estudar:</label>
        <input type="number" name="hours-per-day" id="input-hours-per-day" min="1" max="8">
    </div>
</form>
<?php
    $data = $this->getData();
    foreach ($data as $i => $d) {
        echo "<p>$i -> $d</p>";
    }
?>