<div class="container">
  <h1>RENTABILIDADE</h1>
  <div class="panel-collapse collapse">
    <div class="panel-body" style="text-align: right"></div>
  </div>
  <div class="center">
    <div class="col-md-4">

      <div class="box">
        <div class="divDownloads">
          <p>Relatório de Investimento</p>
        </div>
        <?php foreach($years as $year):?>
          <?php $year_count = 0;?>
          <?php foreach($year->documents as $document):?>
            <?php if($document->category_id == 2 && $document->subcategory_id == 1):?>
              <?php
              $year_count = 1;
              break;
              ?>
            <?php endif;?>
          <?php endforeach;?>
          <?php if ($year_count != 0):?>
            <div class="panel-default relatorio"> <!--Botão ANO-->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a><?=$year->year?></a>
                </h4>
              </div>
              <div class="mes relatorio-dropdown">
                <?php foreach($year->documents as $document):?>
                  <?php if($document->category_id == 2 && $document->subcategory_id == 1):?>
                    <a href="<?=$this->Url->build('/documents/'.$document->file->filename);?>" target="_blank"><?=$document->title?></a>
                  <?php endif;?>
                <?php endforeach;?>
              </div>
            </div>
          <?php endif;?>
        <?php endforeach;?>
      </div>

      <div style="margin: 30px 0;"></div>

      <div class="box">
        <div class="divDownloads">
          <p>Infinity Asset Management</p>
        </div>
        <?php foreach($years as $year):?>
          <?php $year_count = 0;?>
          <?php foreach($year->documents as $document):?>
            <?php if($document->category_id == 2 && $document->subcategory_id == 3):?>
              <?php
              $year_count = 1;
              break;
              ?>
            <?php endif;?>
          <?php endforeach;?>
          <?php if ($year_count != 0):?>
            <div class="panel-default relatorio"> <!--Botão ANO-->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a><?=$year->year?></a>
                </h4>
              </div>
              <div class="mes relatorio-dropdown">
                <?php foreach($year->documents as $document):?>
                  <?php if($document->category_id == 2 && $document->subcategory_id == 3):?>
                    <a href="<?=$this->Url->build('/documents/'.$document->file->filename);?>" target="_blank"><?=$document->title?></a>
                  <?php endif;?>
                <?php endforeach;?>
              </div>
            </div>
          <?php endif;?>
        <?php endforeach;?>
      </div>

    </div>

    <div class="col-md-4">

      <div class="box">
        <div class="divDownloads">
          <p>Lâminas de Investimento</p>
        </div>
        <?php foreach($years as $year):?>
          <?php $year_count = 0;?>
          <?php foreach($year->documents as $document):?>
            <?php if($document->category_id == 2 && $document->subcategory_id == 2):?>
              <?php
              $year_count = 1;
              break;
              ?>
            <?php endif;?>
          <?php endforeach;?>
          <?php if ($year_count != 0):?>
            <div class="panel-default relatorio"> <!--Botão ANO-->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a><?=$year->year?></a>
                </h4>
              </div>
              <div class="mes relatorio-dropdown">
                <?php foreach($year->documents as $document):?>
                  <?php if($document->category_id == 2 && $document->subcategory_id == 2):?>
                    <a href="<?=$this->Url->build('/documents/'.$document->file->filename);?>" target="_blank"><?=$document->title?></a>
                  <?php endif;?>
                <?php endforeach;?>
              </div>
            </div>
          <?php endif;?>
        <?php endforeach;?>
      </div>

      <div style="margin: 30px 0;"></div>

      <div class="box">
        <div class="divDownloads">
          <p>Credit Suisse</p>
        </div>
        <?php foreach($years as $year):?>
          <?php $year_count = 0;?>
          <?php foreach($year->documents as $document):?>
            <?php if($document->category_id == 2 && $document->subcategory_id == 4):?>
              <?php
              $year_count = 1;
              break;
              ?>
            <?php endif;?>
          <?php endforeach;?>
          <?php if ($year_count != 0):?>
            <div class="panel-default relatorio"> <!--Botão ANO-->
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a><?=$year->year?></a>
                </h4>
              </div>
              <div class="mes relatorio-dropdown">
                <?php foreach($year->documents as $document):?>
                  <?php if($document->category_id == 2 && $document->subcategory_id == 4):?>
                    <a href="<?=$this->Url->build('/documents/'.$document->file->filename);?>" target="_blank"><?=$document->title?></a>
                  <?php endif;?>
                <?php endforeach;?>
              </div>
            </div>
          <?php endif;?>
        <?php endforeach;?>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="col-md-6" id="investimento">
    <h1>POLÍTICA DE INVESTIMENTO</h1>
    <p style="padding: 10px 20px 10px;">A POLÍTICA DE INVESTIMENTOS ESTABELECE AS MANEIRAS PELAS QUAIS OS ATIVOS DO FUNDO DA JUSPREV DEVEM SER INVESTIDOS. ESSE DOCUMENTO É PREPARADO PARA ASSEGURAR E GARANTIR A CONTINUIDADE DO GERENCIAMENTO PRUDENTE E EFICIENTE DOS ATIVOS DA ENTIDADE. OS INVESTIMENTOS DEVEM SER SELECIONADOS DE ACORDO COM OS CRITÉRIOS E DEFINIÇÕES CONTIDOS NAS SEÇÕES SEGUINTES E EM CONSON NCIA COM A LEGISLAÇÃO EM VIGOR (RESOLUÇÃO DO CONSELHO MONETÁRIO NACIONAL (CMN) Nº 3792, DE 24.09.2009 E N° 4275, DE 31.10.2013.</p>
    <div class="col-md-12">
      <?php foreach ($investimentos as $key=>$document): ?>
        <div class="bntDownloads">
          <a href="<?=$this->Url->build('/documents/'.$document->file->filename);?>" target="_blank"><?=$document->title?></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="col-md-6" id="demonstrativo">
    <h1>DEMONSTRATIVO ATUARIAL</h1>
    <p style="padding: 10px 20px 10px;">O DEMONSTRATIVO ATUARIAL É UMA EXIGÊNCIA DA SUPERINTENDÊNCIA NACIONAL DE PREVIDÊNCIA COMPLEMENTAR – PREVIC. O DOCUMENTO É DESENVOLVIDO PARA O CADASTRO E ENVIO ANUAL DOS ESTUDOS ATUARIAIS DOS PLANOS DE BENEFÍCIOS DE PREVIDÊNCIA COMPLEMENTAR À PREVIC, DE FORMA A ANALISAR O NÍVEL DE RESERVAS E A SITUAÇÃO FINANCEIRO ATUARIAL DO PLANO.</p>
    <div class="col-md-12">
      <?php foreach ($atuariais as $key=>$document): ?>
        <div class="bntDownloads">
          <a href="<?=$this->Url->build('/documents/'.$document->file->filename);?>" target="_blank"><?=$document->title?></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div id="demonstracoescontabeis">
  <div class="container">
    <div class="col-md-12">
      <h1>DEMONSTRAÇÕES CONTÁBEIS</h1>
      <p style="padding: 10px 20px 10px;">AS DEMONSTRAÇÕES CONTÁBEIS TEM O OBJETIVO DE FORNECER INFORMAÇÕES SOBRE A POSIÇÃO PATRIMONIAL E FINANCEIRA, O RESULTADO E O FLUXO FINANCEIRO DA ENTIDADE. OS DOCUMENTOS FORAM ELABORADOS DE ACORDO COM AS PRÁTICAS CONTÁBEIS ADOTADAS NO BRASIL, E ESTÃO EM CONFORMIDADE COM A RESOLUÇÃO Nº 5, DO MINISTÉRIO DA PREVIDÊNCIA E ASSISTÊNCIA SOCIAL/CONSELHO DE GESTÃO DA PREVIDÊNCIA SOCIAL, DE 30 DE JANEIRO DE 2002 (ALTERADA PELA RESOLUÇÃO CGPC Nº 10, DE 5 DE JULHO DE 2002).</p>

      <?php foreach ($contabeis as $key=>$document): ?>
        <div class="col-md-6">
          <div class="bntDownloads">
            <a href="<?=$this->Url->build('/documents/'.$document->file->filename);?>" target="_blank"><?=$document->title?></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
