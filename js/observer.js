let observer = new IntersectionObserver(function (observables) {
    observables.forEach(function (observable) {
      if (observable.intersectionRatio > 0.05) {
        observable.target.classList.add('visible')
        observer.unobserve(observable.target)
      } else {
        //   observable.target.classList.remove('visible')
      }
    })
    }, {
      threshold: [0.05]
});

let details = document.querySelectorAll('.row')

details.forEach(function (detail) {
    // detail.classList.add('visible')
    observer.observe(detail)
})