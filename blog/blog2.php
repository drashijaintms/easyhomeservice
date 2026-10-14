<!DOCTYPE html>

<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>

.card-hover {
  height: 400px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 0 32px -10px rgba(0,0,0,0.08);
}



.card-hover__content {
  width: 100%;
  text-align: center;
  background-color: #86B971;
  padding: 0 10px 10px;
  position: absolute;
  bottom: 0;
  left: 0;
  transform: translateY(0);
  transition: all 0.35s 0.35s cubic-bezier(.1,.72,.4,.97);
  will-change: bottom, background-color, transform, padding;
  z-index: 1;
}

.card-hover__content::before, .card-hover__content::after {
  content: '';
  width: 100%;
  height: 120px;
  background-color: inherit;
  position: absolute;
  left: 0;
  z-index: -1;
}

.card-hover__content::before {
  top: -80px;
  clip-path: ellipse(60% 80px at bottom center);
}

.card-hover__content::after {
  bottom: -80px;
  clip-path: ellipse(60% 80px at top center);
}

.card-hover__title {
  font-size: 1.5rem;
  margin-bottom: 1em;
}

.card-hover__title span {
  color: #2d7f0b;
}

.card-hover__text {
  font-size: 0.75rem;
}

.card-hover__link {
  position: absolute;
  bottom: 1rem;
  left: 50%;
  transform: translate(-50%, 10%);
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  text-decoration: none;
  color: #2d7f0b;
  opacity: 0;
  padding: 10px;
  transition: all 0.35s;
}

.card-hover__link:hover svg {
  transform: translateX(4px);
}

.card-hover__link svg {
  width: 18px;
  margin-left: 4px;
  transition: transform 0.3s;
}

.card-hover__extra {
  height: 50%;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width: 100%;
  font-size: 1.5rem;
  text-align: center;
  background-color: #86b971;
  padding: 80px;
  bottom: 0;
  z-index: 0;
  color: #dee8c2;
  transform: translateY(100%);
  will-change: transform;
  transition: transform 0.35s;
}

.card-hover__extra span {
  color: #2d7f0b;
}

.card-hover img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  z-index: -1;
  transform: scale(1.2);
  transition: 0.35s 0.35s transform cubic-bezier(.1,.72,.4,.97);
}

</style>







<body>
    <div class="container py-5">
    <div class="row">
        <div class="col-lg-3">
           <div class="card-hover">
    <div class="card-hover__content">
      <h3 class="card-hover__title">
        Vinyl windows
      </h3>
      <p class="card-hover__text">Inexpensive, require little upkeep, and provide superior insulation.</p>

    </div>
    <img src="https://images.unsplash.com/photo-1586511925558-a4c6376fe65f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=60" alt="">
  </div> 
        </div>
                <div class="col-lg-3">
           <div class="card-hover">
    <div class="card-hover__content">
      <h3 class="card-hover__title">
       Wood Windows
      </h3>
      <p class="card-hover__text">Traditional, sophisticated, and excellent for insulation, but they need more upkeep.</p>

    </div>
    <img src="https://images.unsplash.com/photo-1586511925558-a4c6376fe65f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=60" alt="">
  </div> 
        </div>
                <div class="col-lg-3">
           <div class="card-hover">
    <div class="card-hover__content">
      <h3 class="card-hover__title">
       Fiberglass windows
      </h3>
      <p class="card-hover__text">Incredibly strong, resilient to weather, and energy efficient.</p>

    </div>

    <img src="https://images.unsplash.com/photo-1586511925558-a4c6376fe65f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=60" alt="">
  </div> 
        </div>
                <div class="col-lg-3">
           <div class="card-hover">
    <div class="card-hover__content">
      <h3 class="card-hover__title">
       Aluminum windows
      </h3>
      <p class="card-hover__text">sleek and sturdy, but they use less energy unless they have thermal breaks.</p>

    </div>
    <img src="https://images.unsplash.com/photo-1586511925558-a4c6376fe65f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=60" alt="">
  </div> 
        </div>
    </div>
    
    </div>

</body>

</html>
