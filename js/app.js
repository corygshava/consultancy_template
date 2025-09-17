let heightbox = undefined;
let limit = undefined;

window.addEventListener('scroll', e => {
    let navbar = mainnav;
    
    // change up the navbar
    if (heightbox != undefined) {
        let changeat = limit == undefined ? heightbox.offsetHeight : limit;

        let theclass = (window.scrollY >= changeat) ? "scrolled" : "";
        navbar.className = theclass;
        console.log((window.scrollY >= changeat))
    }

    return;
    // get the current focus item
    let sects = document.querySelectorAll('.section.pageitem');
    let scrol = window.scrollY;
    let found = false;
    let theid = "";

    sects.forEach(el => {
        if (scrol >= (el.offsetTop - 20)) {
            // el.classList.add("w3-white");
            theid = el.id;
        } else {
            // el.classList.remove("w3-white");
        }
    });

    // update all alternate menus
    let menus = document.querySelectorAll('.menulinks');

    menus.forEach(el => {
        let links = el.querySelectorAll('a');

        links.forEach(lnk => {
            let thelink = lnk.dataset.mylink.split("#")[1];

            if (thelink == `${theid}`) {
                lnk.classList.add('active');
                // lnk.classList.add('w3-white');
            } else {
                lnk.classList.remove('active');
                // lnk.classList.remove('w3-white');
            }
            console.log(`checking link ${theid} vs ${thelink}`);
        })
    })
});


window.addEventListener('load', e => {
    mekExtras();
    // mekVars();
    // mekEvents();

    highlight_nav();    
})

// functions

function mekExtras() {
    heightbox = document.createElement('div');
    heightbox.className = "heightbox";
    heightbox.style.opacity = 0;

    document.body.appendChild(heightbox);

    document.querySelectorAll('a').forEach(el => {
        el.dataset.mylink = el.href;
    })
}

function highlight_nav() {
    let curfile = getfname(window.location.href);
    let navers = document.querySelectorAll('.linksholder');

    navers.forEach(nav => {
        let thelinks = nav.querySelectorAll('a');
        let toggleclass = "active";

        curfile = curfile == "" ? "index.php" : curfile;

        thelinks.forEach(el => {
            let mylink = el;
            let mypage = getfname(mylink.href);

            console.log(`${mypage} : ${curfile}`);
            if (mypage == curfile) {
                el.classList.add(toggleclass);
            } else {
                el.classList.remove(toggleclass);
            }
        })
    });
}

function populate_portfolio(selector, count) {
    count = count == undefined ? 0 : count;

    let item = document.querySelector(selector);

    if (item == undefined) {
        console.log("pop_portfolio: item is null");
        return;
    }

    item.innerHTML = "";

    wall_of_fame.forEach((el,id) => {
        // create the elements (worry about structure later)
        let div = document.createElement('div');
        let img = document.createElement('img');
        let capdiv = document.createElement('div');
        let gamename = document.createElement('h4');
        let preview_desc = document.createElement('p');
        let morelink = document.createElement('button');
        let overlay = document.createElement('div');

        // get data
        let thepic = el.img;
        let thename = el.gname;
        let theserve = el.service;
        let thedesc = el.desc;

        // assign properties
        div.className = "card";
        img.src = `${thepic}`;
        img.className = "themeimg";
        capdiv.className = "caption";
        gamename.innerHTML = `<b>${thename}</b>`;
        preview_desc.textContent = `${thedesc.substr(0,22)} ...`;
        morelink.className = "themelink v2 w3-btn";
        morelink.innerHTML = `read more <i class="fa fa-angle-double-right icon"></i>`;
        overlay.innerHTML = `
            <b class="abadge">${theserve}</b>
        `;

        // add necessary events early
        morelink.addEventListener('click',() => {
            viewservice(id);
        });

        div.appendChild(img);

        capdiv.appendChild(gamename);
        capdiv.appendChild(preview_desc);
        capdiv.appendChild(morelink);

        div.appendChild(capdiv);
        div.appendChild(overlay);

        item.appendChild(div);
    })
}

function viewservice(id){
    if(id >= wall_of_fame.length){
        console.log('');
        return;
    }
    let service = wall_of_fame[id];
    let deetsUI = document.querySelector('#deetsmodal');

    toggleShowB('#deetsmodal','flex','none');

    // get UI
    let gamename = deetsUI.querySelector('.thegame');
    let gameimg = deetsUI.querySelector('.theimg');
    let gameservice = deetsUI.querySelector('.theservice');
    let gamedesc = deetsUI.querySelector('.thedesc');

    gamename.innerHTML = `${service.gname}`;
    gameimg.src = `${service.img}`;
    gameservice.innerHTML = `${service.service}`;
    gamedesc.innerHTML = `${service.desc}`;
}

// reusables

function getfname(path){
    let brr = path.toLowerCase();
    let path_steps = brr.split('://')[1].split("/");
    let mafile = path_steps[path_steps.length - 1].split('?')[0];
    let res = mafile;

    return res;
}
