My homepage is index.html within the iit folder.

I have a lab landing page that I use to navigate through my labs in iit/classes/IntroITWS/labs.

Each lab is stored as its own directory (lab01, lab02, lab03,...) within labs,
and within each of these directories is the lab's content (sometimes an html page) and a README.md.

My homepage in the iit folder links to my lab landing page and iit/classes/IntroITWS/labs folder.
My landing page in the iit/classes/IntroITWS/labs folder links to each lab folder within it.

var/www/html {
  iit {
    index.html (site homepage)
    README.md
    classes {
      IntroITWS {

        labs {
          index.html (lab homepage)
          lab01 {
            ciuicn-lab1.zip
            README.md
          }
          lab02 {
            ciuicn-NicholasCiuica-resume.html
            README.md
          }
          lab03 {
            README.md (location of this graphic!)
          }
        }

        projects {
          (currently empty)
        }
        
      }
    }
  }
}
