var DOMAIN = "http://localhost:8080";
var lang = 'en';

$(document).ready(function () {
    getLang(lang);
});

$('#sel-1').click(function () {
    lang = 'en';
    getLang(lang);
});

$('#sel-2').click(function () {
    lang = 'it';
    getLang(lang);
});

function getLang(lang) {
    $.ajax({
        url: DOMAIN + '/languages/' + PAGE + "/" + lang + ".json",
        success: function(langContent) {
            switch (PAGE) {
                case 'index':
                    setContentToIndex(langContent);
                    break;
                case 'download':
                    setContentToDownload(langContent);
                    break;
                case 'download_security':
                    setContentToDownloadSecurity(langContent);
                    break;
                case 'download_home':
                    setContentToDownloadHome(langContent);
                    break;
                case 'download_other':
                    setContentToDownloadOther(langContent);
                    break
                default:
                    alert('Page doesn\'t exist');
            }
        },
        error: function (e) {
            console.log(e); 
            alert('Errore nel caricamento della lingua');
        }
    });
}

function setContentToIndex(content) {
    //NAVBAR
    setContentToNavbar(content.navbar);

    //PAGE CONTENT
    $('#section-1-header-1').html(content.section_1.header_1);
    $('#section-1-header-2').html(content.section_1.header_2);
    $('#section-1-button-1').html(content.section_1.button_1);
    $('#section-1-button-2').html(content.section_1.button_2);

    $('#section-2-header').html(content.section_2.header);
    $('#section-2-paragraph-1').html(content.section_2.paragraph_1);
    $('#section-2-paragraph-2').html(content.section_2.paragraph_2);
    $('#section-2-button').html(content.section_2.button);

    $('#section-3-header').html(content.section_3.header);
    $('#section-3-item-1-header').html(content.section_3.item_1.header);
    $('#section-3-item-1-content').html(content.section_3.item_1.content);
    $('#section-3-item-2-header').html(content.section_3.item_2.header);
    $('#section-3-item-2-content').html(content.section_3.item_2.content);
    $('#section-3-item-3-header').html(content.section_3.item_3.header);
    $('#section-3-item-3-content').html(content.section_3.item_3.content);

    $('#section-4-header').html(content.section_4.header);
    $('#section-4-item-1-header').html(content.section_4.item_1.header);
    $('#section-4-item-1-paragraph').html(content.section_4.item_1.paragraph);
    $('#section-4-item-2-header').html(content.section_4.item_2.header);
    $('#section-4-item-2-paragraph').html(content.section_4.item_2.paragraph);
    $('#section-4-item-3-header').html(content.section_4.item_3.header);
    $('#section-4-item-3-paragraph').html(content.section_4.item_3.paragraph);


    //FOOTER
    setContentToFooter(content.footer);
}

function setContentToDownload(content) {
    setContentToNavbar(content.navbar);
    $('#header').html(content.header);

    $('#section_1_item_1_header').html(content.section_1.item_1.header);
    $('#section_1_item_1_content').html(content.section_1.item_1.content);
    $('#section_1_item_1_button').html(content.section_1.item_1.button);
    $('#section_1_item_2_header').html(content.section_1.item_2.header);
    $('#section_1_item_2_content').html(content.section_1.item_2.content);
    $('#section_1_item_2_button').html(content.section_1.item_2.button);
    $('#section_1_item_3_header').html(content.section_1.item_3.header);
    $('#section_1_item_3_content').html(content.section_1.item_3.content);
    $('#section_1_item_3_button').html(content.section_1.item_3.button);
    $('#section_1_others_button_1').html(content.section_1.others.button_1);
    $('#section_1_others_button_2').html(content.section_1.others.button_2);

    $('#section_2_header').html(content.section_2.header);
    $('#section_2_content').html(content.section_2.content);
    $('#section_2_button').html(content.section_2.button);

    $('#section_3_header').html(content.section_3.header);
    $('#section_3_content').html(content.section_3.content);
    $('#section_3_button').html(content.section_3.button);

    $('#section_4_header').html(content.section_4.header)
    $('#section_4_thead_item_1').html(content.section_4.thead.item_1);
    $('#section_4_thead_item_2').html(content.section_4.thead.item_2);
    $('#section_4_thead_item_3').html(content.section_4.thead.item_3);
    $('#section_4_thead_item_4').html(content.section_4.thead.item_4);

    $('#section_4_tbody_row_1_item_1').html(content.section_4.tbody.row_1.item_1);
    $('#section_4_tbody_row_1_item_2').html(content.section_4.tbody.row_1.item_2);
    $('#section_4_tbody_row_1_item_3').html(content.section_4.tbody.row_1.item_3);
    $('#section_4_tbody_row_1_item_4').html(content.section_4.tbody.row_1.item_4);

    $('#section_4_tbody_row_2_item_1').html(content.section_4.tbody.row_2.item_1);
    $('#section_4_tbody_row_2_item_2').html(content.section_4.tbody.row_2.item_2);
    $('#section_4_tbody_row_2_item_3').html(content.section_4.tbody.row_2.item_3);
    $('#section_4_tbody_row_2_item_4').html(content.section_4.tbody.row_2.item_4);

    $('#section_4_tbody_row_3_item_1').html(content.section_4.tbody.row_3.item_1);
    $('#section_4_tbody_row_3_item_2').html(content.section_4.tbody.row_3.item_2);
    $('#section_4_tbody_row_3_item_3').html(content.section_4.tbody.row_3.item_3);
    $('#section_4_tbody_row_3_item_4').html(content.section_4.tbody.row_3.item_4);

    $('#section_4_tbody_row_4_item_1').html(content.section_4.tbody.row_4.item_1);
    $('#section_4_tbody_row_4_item_2').html(content.section_4.tbody.row_4.item_2);
    $('#section_4_tbody_row_4_item_3').html(content.section_4.tbody.row_4.item_3);
    $('#section_4_tbody_row_4_item_4').html(content.section_4.tbody.row_4.item_4);

    $('#section_4_tbody_row_5_item').html(content.section_4.tbody.row_5.item_1);

    $('#section_4_tbody_row_6_item_1').html(content.section_4.tbody.row_6.item_1);
    $('#section_4_tbody_row_6_item_2').html(content.section_4.tbody.row_6.item_2);
    $('#section_4_tbody_row_6_item_3').html(content.section_4.tbody.row_6.item_3);
    $('#section_4_tbody_row_6_item_4').html(content.section_4.tbody.row_6.item_4);

    $('#section_4_tbody_row_7_item_1').html(content.section_4.tbody.row_7.item_1);
    $('#section_4_tbody_row_7_item_2').html(content.section_4.tbody.row_7.item_2);
    $('#section_4_tbody_row_7_item_3').html(content.section_4.tbody.row_7.item_3);
    $('#section_4_tbody_row_7_item_4').html(content.section_4.tbody.row_7.item_4);

    $('#section_4_tbody_row_8_item_1').html(content.section_4.tbody.row_8.item_1);
    $('#section_4_tbody_row_8_item_2').html(content.section_4.tbody.row_8.item_2);
    $('#section_4_tbody_row_8_item_3').html(content.section_4.tbody.row_8.item_3);
    $('#section_4_tbody_row_8_item_4').html(content.section_4.tbody.row_8.item_4);

    $('#section_4_tbody_row_9_item').html(content.section_4.tbody.row_9.item_1);

    $('#section_4_tbody_row_10_item').html(content.section_4.tbody.row_10.item_1);

    $('#section_4_tbody_row_11_item').html(content.section_4.tbody.row_11.item_1);

    $('#section_4_tbody_row_12_item').html(content.section_4.tbody.row_12.item_1);

    $('#section_4_tbody_row_13_item').html(content.section_4.tbody.row_13.item_1);

    $('#section_4_tbody_row_14_item').html(content.section_4.tbody.row_14.item_1);

    $('#section_4_tbody_row_15_item').html(content.section_4.tbody.row_15.item_1);

    $('#section_4_tbody_row_16_item').html(content.section_4.tbody.row_16.item_1);

    $('#section_4_tbody_row_17_item').html(content.section_4.tbody.row_17.item_1);

    setContentToFooter(content.footer);
}

function setContentToDownloadSecurity(content) {
    setContentToNavbar(content.navbar);
    $('#section_paragraph_1').html(content.section.paragraph_1);
    $('#section_paragraph_2 ').html(content.section.paragraph_2);
    setContentToFooter(content.footer);
}

function setContentToDownloadHome(content) {
    setContentToNavbar(content.navbar);
    $('#section_paragraph_1').html(content.section.paragraph_1);
    $('#section_paragraph_2').html(content.section.paragraph_2);
    $('#section_paragraph_3').html(content.section.paragraph_3);
    setContentToFooter(content.footer);
}

function setContentToDownloadOther(content) {
    setContentToNavbar(content.navbar);
    $('#section_paragraph_1').html(content.section.paragraph_1);
    $('#section_paragraph_2').html(content.section.paragraph_2);
    $('#section_paragraph_3').html(content.section.paragraph_3);
    setContentToFooter(content.footer);
}

function setContentToNavbar(navbar) {
    $('#nav-1').html(navbar.nav_1);
    $('#nav-2').html(navbar.nav_2);
    $('#nav-3').html(navbar.nav_3);
    $('#nav-4').html(navbar.nav_4);
    $('#nav-5').html(navbar.nav_5);
    $('#nav-6').html(navbar.nav_6);
    $('#nav-7').html(navbar.nav_7);
    $('#nav-8').html(navbar.nav_8);
    $('#nav-9').html(navbar.nav_9);
    $('#nav-10').html(navbar.nav_10);
    $('#nav-11').html(navbar.nav_11);
    $('#nav-12').html(navbar.nav_12);
    $('#nav-14').html(navbar.nav_14);
    $('#nav-15').html(navbar.nav_15);
}

function setContentToFooter(footer) {
    $('#foot-1-header').html(footer.foot_1.header);
    $('#foot-1-item-1').html(footer.foot_1.item_1);
    $('#foot-1-item-2').html(footer.foot_1.item_2);
    $('#foot-1-item-3').html(footer.foot_1.item_3);

    $('#foot-2-header').html(footer.foot_2.header);
    $('#foot-2-item-1').html(footer.foot_2.item_1);
    $('#foot-2-item-2').html(footer.foot_2.item_2);
    $('#foot-2-item-3').html(footer.foot_2.item_3);

    $('#foot-3').html(footer.foot_3);
}