<div class="row my-3">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    Info
                    <div class="btn btn-primary btn-sm">
                        Voir plus <i class="bi ms-2 bi-arrow-up-right"></i>
                    </div><!-- End of .btn -->
                </div><!-- End of .d-flex -->
            </div><!-- End of .card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <ul class="list-group list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">CNE</div>
                                    <?php echo e($etudiant['id']); ?>

                                </div>
                            </li>
                        </ul>
                    </div><!-- End of .col -->
                    <div class="col">
                        <ul class="list-group list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Nom</div>
                                    <?php if($etudiant['nom_prenom_etud_fr']): ?>
                                        <?php echo e($etudiant['nom_prenom_etud_fr']); ?>

                                    <?php else: ?>
                                        <div class="text-danger">
                                            N/A
                                        </div><!-- End of .text-danger -->
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </div><!-- End of .col -->
                    <div class="col">
                        <ul class="list-group list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Semestre</div>
                                    <?php if($etudiant['semestre']): ?>
                                        <?php echo e($etudiant['semestre']); ?>

                                    <?php else: ?>
                                        <div class="text-danger">
                                            N/A
                                        </div><!-- End of .text-danger -->
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </div><!-- End of .col -->
                    <div class="col">
                        <ul class="list-group list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">DN</div>

                                    <?php if($etudiant['date_naissance_etud']): ?>
                                        <?php echo e(date('d/m/Y', strtotime($etudiant['date_naissance_etud']))); ?>

                                    <?php else: ?>
                                        <div class="text-danger">
                                            N/A
                                        </div><!-- End of .text-danger -->
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </div><!-- End of .col -->
                </div><!-- End of .row -->
            </div><!-- End of .card-body -->
            <div class="card-footer">
                <div class="text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Documents
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Documents</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-start">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Les Attestations
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="d-grid gap-2">
                                                        <button class="btn btn-primary" type="button">Attestation de réussite</button>
                                                        <button class="btn btn-primary" type="button">Attestation de scolarité</button>
                                                        <button class="btn btn-primary" type="button">Attestation de classement</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Les releves
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row mb-2">
                                                        <div class="col" style="display: grid; grid-auto-flow: column;">
                                                            <?php for($i = 0; $i < 6; $i++): ?>
                                                                <button class="btn m-1 btn-primary" type="button">S<?php echo e($i+1); ?></button>    
                                                            <?php endfor; ?>
                                                        </div><!-- End of .col -->    
                                                    </div><!-- End of .row -->
                                                    <div class="row mb-2" >
                                                        <div class="col" style="display: grid; grid-auto-flow: column;">
                                                            <?php for($i = 0; $i < 3; $i++): ?>
                                                                <button class="btn m-1 btn-primary" type="button">Année <?php echo e($i+1); ?></button>
                                                            <?php endfor; ?>
                                                        </div><!-- End of .col -->    
                                                    </div><!-- End of .row -->
                                                    <div class="row">
                                                        <div class="col" style="display: grid; grid-auto-flow: column;">
                                                                <button class="btn m-1 btn-primary" type="button">DEUST</button>
                                                                <button class="btn m-1 btn-primary" type="button">LLST</button>
                                                        </div><!-- End of .col -->    
                                                    </div><!-- End of .row -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End of .d-flex -->
            </div><!-- End of .card-footer -->
        </div><!-- End of .card -->
    </div><!-- End of .col -->
</div><!-- End of .row -->
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/etudiants/components/info.blade.php ENDPATH**/ ?>