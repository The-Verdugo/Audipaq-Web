<div id="crearAuditor" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear Auditor/Coauditor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form action="btnCrear_Auditor" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="modal-body mx-auto" style="width: auto;">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="txtnombreAuditor">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Correo</label>
                                <input type="email" class="form-control" name="correoAuditor">
                             </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Apellido Paterno</label>
                                <input type="text" class="form-control"  name="txtapellidoPatAuditor">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Contrase&ntilde;a</label>
                                <input type="password" class="form-control"  name="contraAuditor">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control"  name="txtapellidoMatAuditor">
                            </div>
    						<div class="form-group col-md-6">
                                <label>Empresa</label>
    							<select name="fkEmpresa" class="form-control">
    							    <option selected>Selecciona una empresa
                                    </option>
                                    @foreach ($listaEmpresas as $empresa)
                                    <option value={{$empresa->id_empresa }}>
                                        {{ $empresa->nombre_empresa}} 
                                    </option>
                                    @endforeach		
    							</select> 
                            </div>
                        </div>       
                </div>
                <div class="modal-footer">
                    <button id="button" class="btn btn-primary" style="background: #00ACC1; border: none;">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>