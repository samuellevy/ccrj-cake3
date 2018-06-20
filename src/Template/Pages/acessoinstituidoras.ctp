<section class="page" id="InstituidorasLogado">

  <!--Banner-->
  <article class="banner">
    <picture>
      <source srcset="<?=$this->Url->image('Site.../images/banner-insti-1366.jpg');?>" media="(max-width: 1400px)" />
      <img src="<?=$this->Url->image('Site.../images/banner-insti.jpg');?>" width="1920" class="img-responsive" alt="Jusprev" />
    </picture>
  </article>

  <!--Acesso Instituidora-->
  <article class="ainstituidoras">

    <div class="container no-padding">
      <div class="col-md-6 no-padding">
        <h1>Prezado(a) Presidente(a),</h1>
        <p>Seja bem-vindo ao acesso restrito das Associações Instituidoras da Previdência Associativa do Ministério Público, da Justiça Brasileira e da Associação Nacional dos Auditores Fiscais da Receita Federal do Brasil – JUSPREV.</p>
        <p>É Nesse espaço poderão ser acompanhadas as prestações de contas, atas das reuniões, deliberações administrativas e demais assuntos da entidade.</p>
      </div>
      <div class="col-md-6 bgPlanjus">
        <p>Prezando sempre pela transparência na gestão, a JUSPREV disponibiliza esta área para uso exclusivo de suas associações instituidoras.</p>
      </div>
    </div>
    <!--Atas-->
    <div class="container no-padding">
      <div class="atas">
        <h1>ATAS</h1>
        <div class="atasForm">
          <?= $this->Form->create('search'); ?>
            <div class="selecione">Mês:</div>
            <select name="month">
              <option value="01">Janeiro</option>
              <option value="02">Fevereiro</option>
              <option value="03">Março</option>
              <option value="04">Abril</option>
              <option value="05">Maio</option>
              <option value="06">Junho</option>
              <option value="07">Julho</option>
              <option value="08">Agosto</option>
              <option value="09">Setembro</option>
              <option value="10">Outubro</option>
              <option value="11">Novembro</option>
              <option value="12">Dezembro</option>
            </select>
            <div class="selecione">Ano:</div>
            <select name="year">
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
            </select>
            <input name="type" value="atas" style="visibility:hidden;display:none;"/>
            <input type="submit" value="Buscar">
          </form>
        </div>

        <div class="arquivos">
          <?php $ata_cont = 0; ?>
          <?php foreach($atas as $ata):?>
          <?php
          $ata_date = $ata->publish_date;
          $ata_month = $this->FormatDate->formatDate($ata_date, "month-numbers");
          $ata_year = $this->FormatDate->formatDate($ata_date, "year");
          ?>
          <?php if (($ata_month == $month_request)&&($ata_year == $year_request)&&($type_request == "atas")): ?>
          <div class="col-md-3">
            <div class="divDownloads">
              <p><?=$ata->title?></p>
            </div>
            <div class="bntDownloads">
              <a href="<?=$this->Url->build('/documents/'.$ata->file->filename);?>" target="_blank">DONWLOAD</a>
            </div>
          </div>
          <?php $ata_cont = 1;?>
          <?php endif; ?>
          <?php endforeach; ?>
          <?php if (($ata_cont == 0)&&($month_request != NULL)&&($type_request == "atas")):?>
            <h2>Nenhum documento encontrado.</h2>
          <?php elseif (($month_request == NULL)||($type_request != "atas")):?>
            <h2>Selecione um mês e um ano.</h2>
          <?php endif?>

        </div>

      </div>

    </div>

    <!--Contratos-->
    <div class="container-fluid no-padding contratos">
      <div class="col-md-6 no-padding">
        <img src="<?=$this->Url->image('Site.../images/img-contratos.jpg');?>" class="img-responsive" alt=""/>
      </div>
      <div class="col-md-6 no-padding">
        <h1>CONTRATOS</h1>
        <div class="box col-md-12">

          <?php
            $contratos_count = 0;
            foreach ($contratos as $contrato):
              $contratos_count = 1;
              break;
            endforeach;
          ?>

          <?php if ($contratos_count == 0):?>
            <h2>Nenhum documento encontrado</h2>
          <?php elseif ($contratos_count != 0):?>
          <?php foreach($contratos as $contrato):?>
            <div class="col-md-6">
              <div class="bntlink"><a href="<?=$this->Url->build('/documents/'.$contrato->file->filename);?>" target="_blank"><?=$contrato->title?></a></div>
            </div>
          <?php endforeach; ?>
<?php endif ?>
        </div>
      </div>
    </div>

    <!--Financeiro-->
    <div class="container no-padding">
      <div class="atas">
        <h1>FINANCEIRO</h1>
        <div class="atasForm">
          <?= $this->Form->create(); ?>
            <div class="selecione">Mês:</div>
            <select name="month">
              <option value="01">Janeiro</option>
              <option value="02">Fevereiro</option>
              <option value="03">Março</option>
              <option value="04">Abril</option>
              <option value="05">Maio</option>
              <option value="06">Junho</option>
              <option value="07">Julho</option>
              <option value="08">Agosto</option>
              <option value="09">Setembro</option>
              <option value="10">Outubro</option>
              <option value="11">Novembro</option>
              <option value="12">Dezembro</option>
            </select>
            <div class="selecione">Ano:</div>
            <select name="year">
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
            </select>
            <input name="type" value="docs" style="visibility:hidden;display:none;">
            <input type="submit" value="Buscar">
          </form>
        </div>

        <div class="arquivos">
          <?php $doc_cont = 0; ?>
          <?php foreach($financeiro as $doc):?>
          <?php
          $doc_date = $doc->publish_date;
          $doc_month = $this->FormatDate->formatDate($doc_date, "month-numbers");
          $doc_year = $this->FormatDate->formatDate($doc_date, "year");
          ?>
          <?php if (($doc_month == $month_request)&&($doc_year == $year_request)&&($type_request == "docs")): ?>
          <div class="col-md-3">
            <div class="divDownloads">
              <p><?=$doc->title?></p>
            </div>
            <div class="bntDownloads">
              <a href="<?=$this->Url->build('/documents/'.$doc->file->filename);?>" target="_blank">DONWLOAD</a>
            </div>
          </div>
          <?php $doc_cont = 1;?>
          <?php endif; ?>
          <?php endforeach; ?>
          <?php if (($doc_cont == 0)&&($month_request != NULL)&&($type_request == "docs")):?>
            <h2>Nenhum documento encontrado.</h2>
          <?php elseif (($month_request == NULL)||($type_request != "docs")):?>
            <h2>Selecione um mês e um ano.</h2>
          <?php endif?>

        </div>
      </div>

    </div>

  </article>
</section>
