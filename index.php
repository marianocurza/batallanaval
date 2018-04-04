<?php
require_once 'header.php';
?>
<div class="row">
    <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Barco
                    </th>
                    <th>
                        Coordenadas
                    </th>
                    <th>
                        Alineación
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                    <td>
                        1
                    </td>
                    <td>
                        Barco 1
                    </td>
                    <td>
                        <input size="2" type="text" /> -
                        <input size="2" type="text" />
                    </td>
                    <td>
                        <select>

                            <option>
                                Horizontal
                            </option>
                        </select>
                    </td>
                </tr>
                <tr class="table-active">
                    <td>
                        2
                    </td>
                    <td>
                        Barco 2
                    </td>
                    <td>
                        <input size="2" type="text" /> -
                        <input size="2" type="text" />
                    </td>
                    <td>
                        <select>

                            <option>
                                Horizontal
                            </option>
                        </select>
                    </td>
                </tr>
                <tr class="table-active">
                    <td>
                        3
                    </td>
                    <td>
                        Barco 3
                    </td>
                    <td>
                        <input size="2" type="text" /> -
                        <input size="2" type="text" />
                    </td>
                    <td>
                        <select>

                            <option>
                                Vertical
                            </option>
                        </select>
                    </td>
                </tr>
                <tr class="table-active">
                    <td>
                        4
                    </td>
                    <td>
                        Barco 4
                    </td>
                    <td>
                        <input size="2" type="text" /> -
                        <input size="2" type="text" />
                    </td>
                    <td>
                        <select>

                            <option>
                                Horizontal
                            </option>
                        </select>
                    </td>
                </tr>
                <tr class="table-active">
                    <td>
                        5
                    </td>
                    <td>
                        Barco 5
                    </td>
                    <td>
                        <input size="2" type="text" /> -
                        <input size="2" type="text" />
                    </td>
                    <td>
                        <select>

                            <option>
                                Horizontal
                            </option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <img alt="Bootstrap Image Preview" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Schiffeversenk.jpg/220px-Schiffeversenk.jpg" />
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form role="form">
            <div class="form-group">

                <label for="exampleInputEmail1">
                    Usuario
                </label>
                <input class="form-control" id="exampleInputEmail1" type="email" />
            </div> 
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
    <div class="col-md-6">
    </div>
</div>
<?php
require_once 'footer.php';
