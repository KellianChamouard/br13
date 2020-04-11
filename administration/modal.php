<!-- Note -->
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./index.php" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Date</span>
                        </div>
                        <input class="form-control" type="date" name="datenote"></div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="exampleRadios"
                                id="exampleRadios1"
                                value="option1"
                                checked="checked">
                                <label class="form-check-label" for="exampleRadios1">
                                    <span class="txtred">Très Important</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="exampleRadios"
                                    id="exampleRadios2"
                                    value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        <span class="txtorange">Important</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="exampleRadios"
                                        id="exampleRadios2"
                                        value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            <span class="txtgreen">Pas Important</span>
                                        </label>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Note : <b>30/40 mots maximum</b></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Quitter</button>
                                <button type="submit" class="btn btn-primary">Ajouter la note</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>