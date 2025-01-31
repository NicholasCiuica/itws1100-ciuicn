My homepage is index.html within the iit folder.

I have a lab landing page that I use to navigate through my labs, iit/classes/IntroITWS/labs/labs.html.

Each lab is stored as its own directory (lab01, lab02, lab03,...) within the labs folder,
and within each of these directories is the lab's content, an index.html landing page, and a README.md.

My pages have a navigation bar that has links to the homepages, the labs page, each individual lab's landing page,
and external links to GitHub and Azure.

var/www/html {
  iit {
    index.html (website homepage)
    README.md

    resources {
      style.css
    }

    classes {
      IntroITWS {

        labs {
          labs.html (labs homepage)
          lab01 {
            ciuicn-lab1.zip
            ciuicn-lab1 { contains images in zip to be linked to }
            index.html
            README.md
          }
          lab02 {
            ciuicn-NicholasCiuica-resume.html
            (lab instructions folder)
            index.html
            README.md
          }
          lab03 {
            (lab instructions folder)
            index.html
            README.md (location of this graphic!)
          }
        }
        
      }
    }
  }
}
