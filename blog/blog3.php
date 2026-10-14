<!DOCTYPE html>

<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>

.flexcard {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  
  align-items: baseline;
 
  border-radius: 20px;
}

.flexcardTitle {
  text-transform: uppercase;
  font-size: 26px;
  font-weight: 400;
}

.flexcardText {
  text-align: center;
  font-weight: 300;
}


.flex-1 {
  display: flex;
  justify-content: center;
  width: 100%;
  margin: 10px auto;
}



/* GREEN CARD */

.flexcardGreen {
  background: #f9fbfa;
  box-shadow: 4px 4px 4px #AED2BC;
}

.flexcardNumberGreen {
  background: #FCFCFC;
  background: -webkit-linear-gradient(right, #FCFCFC, #AED2BC);
  background: -moz-linear-gradient(right, #FCFCFC, #AED2BC);
  background: linear-gradient(to left, #FCFCFC, #AED2BC);
  box-shadow: 0px 2px 2px #AED2BC;
}


/* RESPONSİVE */

@media only screen and (max-width: 800px) {

  .flexcard {
    width: 35%;
    margin-top: 20px;
  }

  img.flexcardimgItem {
    width: 30%;
  }

}

</style>




<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
          <div class="flexcard flexcardGreen">
            <div class="flex-1 flexcardTitle">Vinyl</div>
            <div class="flex-1 flexcardText">Inexpensive, require little upkeep, and provide superior insulation.</div>
            <div class="flex-1 flexcardImg">
              <i class="fa fa-window-maximize"></i>
            </div>
          </div>
        </div>

      <div class="col-lg-3">
          <div class="flexcard flexcardGreen">
            <div class="flex-1 flexcardTitle">Wood </div>
            <div class="flex-1 flexcardText">Traditional, sophisticated, and excellent for insulation, but they need more upkeep.</div>
            <div class="flex-1 flexcardImg">
              <i class="fa fa-tree"></i>
            </div>
          </div>
        </div>
      <div class="col-lg-3">
          <div class="flexcard flexcardGreen">
            <div class="flex-1 flexcardTitle">Fiberglass </div>
            <div class="flex-1 flexcardText">Incredibly strong, resilient to weather, and energy efficient.</div>
            <div class="flex-1 flexcardImg">
              <i class="fa fa-layer-group"></i>
            </div>
          </div>
        </div>
      <div class="col-lg-3">
          <div class="flexcard flexcardGreen">
            <div class="flex-1 flexcardTitle">Aluminum </div>
            <div class="flex-1 flexcardText">sleek and sturdy, but they use less energy unless they have thermal breaks.</div>
            <div class="flex-1 flexcardImg">
              <i class="fa fa-building"></i>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>
