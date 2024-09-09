<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <h1 class="mb-3">Nuevo Instrumento</h1>

            <form>

                <div class="row g-3">
                    <div class="col"><label for="numexpte" class="form-label">Numero</label>
                        <input type="number" class="form-control" id="numexpte" name="numexpte" required>
                    </div>
                    <div class="col"><label for="anioexpte" class="form-label">Año</label>

                    <div class="input-group date fj-control">
                    <input type="text" class="form-control">
                    </div>

                        



                    </div>
                    <div class="col"><label for="letraexpte" class="form-label">Tipo</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione una opción</option>
                            <option value="ordenanza">Ordenanza</option>
                            <option value="resolucion">Resolución</option>
                            <option value="declaracion">Declaración</option>
                            <option value="comunicacion">Comunicación</option>
                        </select>
                    </div>


                </div>
                <div class="row g-3">




                    <div class="col-md-6">
                        <label for="your-name" class="form-label">Numero</label>
                        <input type="text" class="form-control" id="your-name" name="your-name" required>

                    </div>
                    <div class="col-md-6">
                        <label for="your-name" class="form-label">Letra</label>
                        <input type="text" class="form-control" id="your-name" name="your-name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="your-surname" class="form-label">Your Surname</label>
                        <input type="text" class="form-control" id="your-surname" name="your-surname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="your-email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="your-email" name="your-email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="your-subject" class="form-label">Your Subject</label>
                        <input type="text" class="form-control" id="your-subject" name="your-subject">
                    </div>
                    <div class="col-12">
                        <label for="your-message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <button data-res="<?php echo $sum; ?>" type="submit" class="btn btn-dark w-100 fw-bold">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
   
    

</div>


