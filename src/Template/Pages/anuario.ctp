
 <div class="anuario">
        <div class="webdoor-anuario">
            <?=$this->Html->image('Site.../images/header.jpg', ['alt'=>'Anuário']);?>    
        </div>
        <section class="jury">
            <div class="wrapper">
                <div class="juryTitleBox">
                    <h2>presidentes de júri</h2></div>
                <div class="juryContainer">
                    <div class="juryItem"><?=$this->Html->image('Site.../images/Obama.png', ['alt'=>'Anuário']);?> 
                        <div class="juryContent">
                            <p class="name">Barack, Obama</p>
                            <p class="description">Filme</p>
                        </div>
                    </div>
                    <div class="juryItem"><?=$this->Html->image('Site.../images/Obama.png', ['alt'=>'Anuário']);?> 
                        <div class="juryContent">
                            <p class="name">Barack, Obama</p>
                            <p class="description">Filme</p>
                        </div>
                    </div>
                    <div class="juryItem"><?=$this->Html->image('Site.../images/Obama.png', ['alt'=>'Anuário']);?> 
                        <div class="juryContent">
                            <p class="name">Barack, Obama</p>
                            <p class="description">Filme</p>
                        </div>
                    </div>
                    <div class="juryItem"><?=$this->Html->image('Site.../images/Obama.png', ['alt'=>'Anuário']);?> 
                        <div class="juryContent">
                            <p class="name">Barack, Obama</p>
                            <p class="description">Filme</p>
                        </div>
                    </div>
                    <div class="juryItem"><?=$this->Html->image('Site.../images/Obama.png', ['alt'=>'Anuário']);?> 
                        <div class="juryContent">
                            <p class="name">Barack, Obama</p>
                            <p class="description">Filme</p>
                        </div>
                    </div>
                    <div class="juryItem"><?=$this->Html->image('Site.../images/Obama.png', ['alt'=>'Anuário']);?> 
                        <div class="juryContent">
                            <p class="name">Barack, Obama</p>
                            <p class="description">Filme</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="HowtoApply">
            <div class="bgBox">
                <div class="wrapper">
                    <div class="titleBox">
                        <h2>Como inscrever suas peças</h2></div>
                    <div class="stepByStepContainer">
                        <div class="step">
                            <div class="media"><?=$this->Html->image('Site.../images/firststep.png', ['alt'=>'Anuário']);?> </div>
                            <div class="text">
                                <p>Crie uma pasta com o nome de sua agência e subpastas para cada categoria</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="media"><?=$this->Html->image('Site.../images/secondstep.png', ['alt'=>'Anuário']);?> </div>
                            <div class="text">
                                <p>Nomeie seus arquivos com o título das peças. Em caso de campanha, adicione números. Exemplo: nomedacampanha02.jpg</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="media"><?=$this->Html->image('Site.../images/thirdstep.png', ['alt'=>'Anuário']);?> </div>
                            <div class="text">
                                <p>Multiplique o número de peças por 100, deposite o valor na conta do Clube de Criação e junte o comprovante à pasta da sua agência.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="media"><?=$this->Html->image('Site.../images/fourth.png', ['alt'=>'Anuário']);?> </div>
                            <div class="text">
                                <p>Comprima a pasta e sua o arquivo .rar ou .zip no WeTransfer</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="media"><?=$this->Html->image('Site.../images/fifth.png', ['alt'=>'Anuário']);?> </div>
                            <div class="text">
                                <p>Envie o link do WeTransfer ao preencher o formulário abaixo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bankData">
            <div class="wrapper">
                <div class="titleBox">
                    <h2>Dados Bancários</h2></div>
                <div class="infoBox">
                    <p>Clube de criação do rio de janeiro</p>
                    <p>banco inter</p>
                    <p>c/c xxx-xx</p>
                    <p>cnpj: XXXX.XXXX.XXXXX/0001</p>
                </div>
            </div>
        </section>
        <section class="form">
            <div class="wrapper">
                <div class="titleBox">
                    <h2>Inscrição</h2></div>
                <div class="description">
                    <p>Fazer a inscrição de peças no anuário é simples, fácil e sem sofrimento. Mesmo assim, caso tenha alguma dúvida entre em contato pelo e-mail anuario@clubedecriacao.rio</p>
                </div>
                <div class="formBox">
                    <div class="formTitle">
                        <h2>responsável</h2></div>
                    <div class="form">
                        <?php echo $this->Form->create(); ?>
                            <div class="inputContainer">
                                <div class="inputBox name">
                                    <div class="inputLabel">
                                        <label>Nome</label>
                                    </div>
                                    <div class="inputElement">
                                        <input class="name" name="name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="inputContainer">
                                <div class="inputBox email">
                                    <div class="inputLabel">
                                        <label>E-mail*</label>
                                    </div>
                                    <div class="inputElement">
                                        <input class="email" type="text" name="email" required="required" />
                                    </div>
                                </div>
                                <div class="inputBox phone">
                                    <div class="inputLabel">
                                        <label>Telefone*</label>
                                    </div>
                                    <div class="inputElement">
                                        <input class="phone" type="text" name="phone" required="required" />
                                    </div>
                                </div>
                            </div>
                            <div class="inputContainer">
                                <div class="inputBox agency">
                                    <div class="inputLabel">
                                        <label>Agência*</label>
                                    </div>
                                    <div class="inputElement">
                                        <input class="agency" type="text" name="agency" required="required" />
                                    </div>
                                </div>
                                <div class="inputBox jobTitle">
                                    <div class="inputLabel">
                                        <label>Cargo*</label>
                                    </div>
                                    <div class="inputElement">
                                        <input class="jobTitle" type="text" name="jobTitle" required="required" />
                                    </div>
                                </div>
                            </div>
                            <div class="inputContainer">
                                <div class="bar"><?=$this->Html->image('Site.../images/barform.png', ['alt'=>'Anuário']);?> </div>
                            </div>
                            <div class="inputContainer">
                                <div class="inputBox file">
                                    <div class="inputElement file">
                                        <input class="fileName" type="text" name="link" value="" placeholder="Link do wetransfer" />
                                    </div>
                                </div>
                            </div>
                            <?= $this->Flash->render() ?>
                            <div class="submitBox">
                                <button class="submitForm"> Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
