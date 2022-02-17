<<?php
include_once 'header.php'
?> <!-- CONTENT (directly below Botaris logo) -->
    <h1>Submit Repair</h1>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tool/Vehicle</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Select Tool</option>
            <option value="1">BOT435 - Blower</option>
            <option value="2">BOT212 - Whip</option>
            <option value="3">BOT302 - Mower</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Problem</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Select Problem</option>
            <option value="1">Broken Pull Cord</option>
            <option value="1">Broken Blade Cable</option>
            <option value="1">Broken Motor Cable</option>
            <option value="2">Won't Start</option>
            <option value="3">Won't Idle</option>
            <option value="3">Other</option>
        </select>
        <div class="my-3">
            <label for="exampleFormControlTextarea1" class="form-label">Other Problem Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <button class="btn btn-success btn-lg mb-4 w-100" onclick="window.location.href='repair-thanks.php';">
        Submit Repair
    </button>
    </form>
    <?php include_once 'footer.php' ?>