        <!-- Modal -->
        <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Cadastrar Novo Evento</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="newEvent" id="newEvent" method="POST" action="">
                            <div class="form-group">
                                <label for="start" class="col-sm-2 control-label">Data</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="start" id="start" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tmEvent" class="col-sm-2 control-label">Horário</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" name="tmEvent" id="tmEvent">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Evento</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Evento">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>