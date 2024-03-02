import fs from "fs-extra";
import path from "path";

/* fs.readdir("./", function (error, files) {
  // console.log({ error, files });
  if (!error) {
    files.map((file) => {
      console.log(`http://localhost:5173/${file}`);
    });
  }
});
 */
const sourcePath = "/media/syedamirali/Office Work/pathgriho/dist";
const destinationPath = "/media/syedamirali/Office Work/view/dist";

// async function copyFolder(src, dest) {
//   try {
//     await fs.mkdir(dest, { recursive: true });
//     const entries = await fs.readdir(src, { withFileTypes: true });

//     for (let entry of entries) {
//       const srcPath = path.join(src, entry.name);
//       const destPath = path.join(dest, entry.name);

//       entry.isDirectory()
//         ? await copyFolder(srcPath, destPath)
//         : await fs.copyFile(srcPath, destPath);
//     }

//     console.log({ message: "copying done." });
//   } catch (error) {
//     console.log({ error });
//   }
// }

// copyFolder(sourcePath, destinationPath);

// fs.copy(sourcePath, destinationPath, { recursive: true }, function (error) {
//   if (error) {
//     console.log({ error });
//   } else {
//     console.log("copying done");
//   }
// });

// `concurrently cp -r '/media/syedamirali/OfficeWork/pathgriho/dist' '/media/syedamirali/Office Work/view/dist'\" \"cd '/media/syedamirali/Office Work/view' yarn run git-push`;

const arrowChildSvg =
  '<span class="fill-slate-100 group-[child:hover]:-rotate-90 rotate-180 duration-300"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="18" height="18"> <path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z" /></svg></span>';

const arrowSvg =
  '<span class="fill-slate-600 group-hover:fill-primary group-hover:drop-shadow-primary group-[.active-nav]:fill-primary group-[.active-nav]:drop-shadow-primary group-[.active-nav]:rotate-180 duration-500 group-hover:rotate-180"> <svg  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 320 512" width="18" height="18"> <path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z" /> </svg> </span>';

const header = [
  {
    id: 1,
    name: "Home",
    href: "#",
    child: [],
  },
  {
    id: 2,
    name: "Media",
    href: "#",
    child: [
      { id: 1, name: "Image Gallery", href: "#", children: [] },
      { id: 1, name: "Videos", href: "#", children: [] },
    ],
  },
  {
    id: 3,
    name: "Events",
    href: "#",
    child: [
      { id: 1, name: "Upcoming Events", href: "#", children: [] },
      { id: 2, name: "Past Campaigns", href: "#", children: [] },
      {
        id: 3,
        name: "Volunteer Opportunities",
        href: "#",
        children: [],
      },
      {
        id: 4,
        name: "Organizer Events & Campaigns",
        href: "#",
        children: [],
      },
    ],
  },
  {
    id: 4,
    name: "Updates",
    href: "#",
    child: [
      { id: 1, name: "Blogs", href: "#", children: [] },
      { id: 2, name: "News", href: "#", children: [] },
      { id: 3, name: "Reports", href: "#", children: [] },
    ],
  },
  {
    id: 5,
    name: "Book Store",
    href: "#",
    child: [
      { id: 1, name: "Fiction", href: "#", children: [] },
      { id: 2, name: "Non-Fiction", href: "#", children: [] },
      {
        id: 3,
        name: "Mystery & Thriller",
        href: "#",
        children: [],
      },
      {
        id: 4,
        name: "Science Fiction & Fantasy",
        href: "#",
        children: [],
      },
    ],
  },
  {
    id: 6,
    name: "Who We Are",
    href: "#",
    child: [
      { id: 1, name: "About Us", href: "#", children: [] },
      { id: 2, name: "Pathgriho Team", href: "#", children: [] },
      {
        id: 3,
        name: "Work With Us",
        href: "#",
        children: [
          { id: 1, name: "Our Partners", href: "#" },
          { id: 2, name: "Our Mission", href: "#" },
          { id: 3, name: "Our Vision", href: "#" },
          { id: 4, name: "Career", href: "#" },
          { id: 5, name: "Contact", href: "#" },
        ],
      },
      { id: 4, name: "FAQ", href: "#", children: [] },
      { id: 5, name: "Contact", href: "#", children: [] },
    ],
  },
]
  .map(
    (menus) => `
      <li class="group relative 2xl:h-full flex items-start gap-4 2xl:gap-0 2xl:items-center justify-center" 
       onclick="childMenu(event)">
        <a class="font-medium capitalize text-lg font-oswald text-slate-600 group-hover:drop-shadow-primary group-hover:text-primary group-[.active-nav]:text-primary group-[.active-nav]:drop-shadow-primary flex gap-1 items-center group-hover:items-end justify-center duration-500"
          href="#">
          <span class="capitalize">${menus.name}</span>

          ${menus.child.length ? arrowSvg : ""}
          
        </a>

        <!-- Child Menus -->

        <ul class="hidden group-[.active-nav]:block group-hover:block 2xl:absolute top-20 left-0 font-oswald bg-primary text-slate-200 text-sm font-medium">
           
          ${menus.child
            .map(
              (childMenus) =>
                `<li class="duration-300 relative px-6 py-3 hover:bg-secondary group groupchild" >
                  <a class="font-medium capitalize text-md font-oswald text-slate-100 flex gap-1 items-start justify-start duration-500 groupchild group-[child.active-nav]:bg-secondary"
                    href="${childMenus.href}">
                    <span class="capitalize text-sm text-nowrap">${
                      childMenus.name
                    }</span>
                    
                     ${childMenus.children.length ? arrowChildSvg : ""}
                  </a>

                  <!-- Children -->
                  <ul
                    class="hidden group-[child.active-child-nav]:block group-[child:hover]:block 2xl:absolute top-0 left-32 m-3 2xl:my-0 2xl:mr-0 2xl:ml-3.5 font-oswald bg-primary text-slate-200 text-sm font-medium"
                  >
                    ${childMenus.children
                      .map(
                        (childrenMenus) => `
                        <li class="duration-300">
                          <a
                            href="${childrenMenus.href}"
                            class="h-full block text-nowrap px-6 py-3 duration-500 hover:bg-secondary hover:text-slate-100"
                            >${childrenMenus.name}</a
                          >
                        </li>`
                      )
                      .join("")} 
                  </ul>
                </li>`
            )
            .join("")}
           
        </ul>
      </li>`
  )
  .join("");

console.log("\n\n", header, "\n\n");
