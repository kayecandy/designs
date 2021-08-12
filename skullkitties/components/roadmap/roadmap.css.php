<style>

body.<?= ROADMAP_CONTENTS['id'] ?>::before{
    content: "";
    background-image: url('data:image/png;base64,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ZW50cy8xLjEvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iIHhtbG5zOmV4aWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChNYWNpbnRvc2gpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMS0wOC0wNFQxOToyOTo1MSswODowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMS0wOC0xMlQxNTozMDo1NyswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjEtMDgtMTJUMTU6MzA6NTcrMDg6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmNkNjIwNTkwLTFmZjItNDIwOC1iYjEyLWQ0N2FmNzFlNTFlOSIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjVhZTM0Nzg2LTdlNDYtMGY0Mi1iYmZlLWMxYjg2MGQzMzU2MyIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOmNmZTczYzIxLWIyODgtNDdmZS05MjQyLTAyYjUxYmVmYzNjMCIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9IkRpc3BsYXkiIHRpZmY6T3JpZW50YXRpb249IjEiIHRpZmY6WFJlc29sdXRpb249IjcyMDAwMC8xMDAwMCIgdGlmZjpZUmVzb2x1dGlvbj0iNzIwMDAwLzEwMDAwIiB0aWZmOlJlc29sdXRpb25Vbml0PSIyIiBleGlmOkNvbG9yU3BhY2U9IjY1NTM1IiBleGlmOlBpeGVsWERpbWVuc2lvbj0iMjE2IiBleGlmOlBpeGVsWURpbWVuc2lvbj0iMTA4MCI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6Y2ZlNzNjMjEtYjI4OC00N2ZlLTkyNDItMDJiNTFiZWZjM2MwIiBzdEV2dDp3aGVuPSIyMDIxLTA4LTA0VDE5OjI5OjUxKzA4OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoTWFjaW50b3NoKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6Y2E1ZGVmN2ItZGFkNy00MGY5LTgyZjYtMmE2NzZmMjA2ZTNjIiBzdEV2dDp3aGVuPSIyMDIxLTA4LTA0VDIwOjQ4OjI2KzA4OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoTWFjaW50b3NoKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY29udmVydGVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJmcm9tIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJkZXJpdmVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJjb252ZXJ0ZWQgZnJvbSBhcHBsaWNhdGlvbi92bmQuYWRvYmUucGhvdG9zaG9wIHRvIGltYWdlL3BuZyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ODkxM2I5YjgtNWQzNS00MDY5LWEzYjQtMjYxZjkxYjVkZmU5IiBzdEV2dDp3aGVuPSIyMDIxLTA4LTA0VDIwOjQ4OjI2KzA4OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoTWFjaW50b3NoKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6Y2Q2MjA1OTAtMWZmMi00MjA4LWJiMTItZDQ3YWY3MWU1MWU5IiBzdEV2dDp3aGVuPSIyMDIxLTA4LTEyVDE1OjMwOjU3KzA4OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoTWFjaW50b3NoKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6Y2E1ZGVmN2ItZGFkNy00MGY5LTgyZjYtMmE2NzZmMjA2ZTNjIiBzdFJlZjpkb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6NTA4MjFlYzQtZjQ1Zi1jYzQ4LTlkNWItNTE5ZjlhMzdhOGQ3IiBzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6Y2ZlNzNjMjEtYjI4OC00N2ZlLTkyNDItMDJiNTFiZWZjM2MwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+mFjSGgAACH5JREFUeNrt1kENwCAABEEgNdEnOjCLElxUz1UE4cWMhEs2ufrNngIc0UwAAgOBAQIDgYHAAIGBwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDBAYCAwEBggMBAYCAwQGAgOBAQIDgYHAAIGBwEBggMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMEBgIDgQECA4GBwACBgcBAYIDAQGAgMEBgIDAQGCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDgQECA4GBwACBgcAAgYHAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMBAYIDAQGCAwEBgIDBAYCA4EBAgOBgcAAgYHAQGCAwEBgIDBAYCAwQGAgMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCA4EBAgOBAQIDgYHAAIGBwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDBAYCAwEBggMBAYCAwQGAgOBAQIDgYHAAIGBwEBggMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMEBgIDgQECA4GBwACBgcBAYIDAQGAgMEBgIDAQGCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDgQECA4GBwACBgcAAgYHAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMBAYIDAQGCAwEBgIDBAYCA4EBAgOBgcAAgYHAQGCAwEBgIDBAYCAwEJgJQGAgMEBgIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgOBAQIDgQECA4GBwACBgcBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCAwQGAgMBAYIDAQGAgMEBgIDgQECA4GBwACBgcBAYIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDBAYCA4EBAgOBgcAAgYHAQGCAwEBgIDBAYCAwEBggMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCA4EBAgOBgcAAgYHAAIGBwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDAQGCAwEBggMBAYCAwQGAgOBAQIDgYHAAIGBwEBggMBAYCAwQGAgMEBgIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgOBAQIDgQECA4GBwACBgcBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCAwQGAgMBAYIDAQGAgMEBgIDgQECA4GBwACBgcBAYIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDBAYCA4EBAgOBgcAAgYHAQGCAwEBgIDBAYCAwEBggMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCA4EBAgOBgcAAgYHAAIGBwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDAQGCAwEBgIzAQgMBAYIDAQGAgMEBgIDgQECA4GBwIANT96xzABn1CRWABcRBAYIDAQGAgMEBgIDgQECA4GBwACBgcBAYIDAQGAgMEBgIDBAYCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDgQECA4EBAgOBgcAAgYHAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMEBgIDAQGCAwEBgIDBAYCA4EBAgOBgcAAgYHAQGCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCAwQGAgOBAQIDgYHAAIGBwEBggMBAYCAwQGAgMBAYIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgOBAQIDgYHAAIGBwACBgcBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCAwEBggMBAYIDAQGAgMEBgIDgQECA4GBwACBgcBAYIDAQGAgMEBgIDBAYCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDgQECA4EBAgOBgcAAgYHAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMEBgIDAQGCAwEBgIDBAYCA4EBAgOBgcAAgYHAQGCAwEBgIDATgMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMEBgIDgQECA4GBwACBgcBAYIDAQGAgMEBgIDAQGCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDgQECA4GBwACBgcAAgYHAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMBAYIDAQGCAwEBgIDBAYCA4EBAgOBgcAAgYHAQGCAwEBgIDBAYCAwQGAgMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCA4EBAgOBAQIDgYHAAIGBwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDBAYCAwEBggMBAYCAwQGAgOBAQIDgYHAAIGBwEBggMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMEBgIDgQECA4GBwACBgcBAYIDAQGAgMEBgIDAQGCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDgQECA4GBwACBgcAAgYHAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMBAYIDAQGCAwEBgIDBAYCA4EBAgOBgcAAgYHAQGCAwEBgIDBAYCAwQGAgMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCA4EBAgOBAQIDgYHAAIGBwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDARmAhAYCAwQGAgMBAYIDAQGAgMEBgIDgQECA4GBwACBgcBAYIDAQGCAwEBgIDBAYCAwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDBAYCA4EBAgOBgcAAgYHAQGCAwEBgIDBAYCAwEBggMBAYIDAQGAgMEBgIDAQGCAwEBgIDBAYCA4EBAgOBgcAAgYHAAIGBwEBggMBAYCAwQGAgMBAYIDAQGAgMEBgIDG72A3SeEBRigEU7AAAAAElFTkSuQmCC');
    background-size: auto 100%;
    background-repeat: repeat-x;
    /* background-attachment: fixed; */

    position: fixed;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}

.section-<?= ROADMAP_CONTENTS['id'] ?>{
    padding-top: 0;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-roadmap{
    /* max-width: 900px; */
    margin: 0 auto;
    align-items: flex-start;
    overflow: hidden;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> div<?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>-title-img{
    /* height: 100vh; */
    /* display: flex; */
    top: 6rem;
    /* align-items: flex-start; */
    position: -webkit-sticky;
    position: sticky;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> img<?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>-title-img{
    max-width: 250px;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>-title-text
{
    color: <?= ROADMAP_CONTENTS['titleColor'] ?>;
    font-weight: 900;
    font-size: <?= ROADMAP_CONTENTS['titleTextSize'] ?>;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . ROADMAP_CONTENTS['id'] ?>-col{
    width: calc(50% + 20px)
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-wrapper{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 40px;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-wrapper::before{
    content: "";
    background: black;
    height: 100%;
    width: 12px;
    left: 0;
    top: 0;
    position: absolute;
    margin-left: -1px;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-wrapper::after{
    content: "";
    background: black;
    height: 100%;
    width: 12px;
    right: 0;
    top: 0;
    position: absolute;
    margin-right: -1px;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-bar{
    position: absolute;
    top: 0;
    bottom: 0;
    width: 0.7rem;
    left: 14px;
    background: #f3f3f3;
    z-index: -10;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item{
    display: flex;
    align-items: flex-start;
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item <?= '.' . PREFIX ?>-bg-white{
    flex-grow: 1;
    padding-bottom: 2rem;
}

<?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item::before,
<?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item::after{
    /* content: ""; */
    display: block;
    background-color: <?= ROADMAP_CONTENTS['timelineDotColor'] ?>;

    flex-grow: 0;
    flex-shrink: 0;

    width: 40px;
    height: 40px;
    min-height: 40px;
    margin-top: 2rem;
    padding-top: 0px;
    border-style: solid;
    border-width: 5px;
    border-color: <?= ROADMAP_CONTENTS['timelineDotBorderColor'] ?>;
    border-radius: 50%;
    position: relative;

    transition: all 0.3s ease-in-out;
}


.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item:hover::before,
.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item.active::before,
.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item:hover::after,
.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item.active::after
{
    background-color: <?= ROADMAP_CONTENTS['timelineDotColor'] ?>;
    border-width: 5px;
    transform: scale(1.1);
    /* box-shadow: 0 2px 9px 0 rgb(105 223 124 / 85%); */
    border-color: <?= ROADMAP_CONTENTS['timelineDotActiveBorderColor'] ?>;

}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-card{
    box-shadow: 0 0 5px 0 rgb(39 25 77 / 2%), 0 3px 20px 0 rgb(112 81 239 / 4%), 0 10px 28px 0 rgb(39 25 77 / 3%);
    border-radius: 1rem;
    display: inline-block;
    opacity: 0;

    transform: translateX(5rem);

    transition: all 0.3s ease-in-out;

    background: white;
    color: black;

}


.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item:hover <?= '.' . PREFIX ?>-timeline-card,
.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item.active <?= '.' . PREFIX ?>-timeline-card{
    opacity: 1;
    transform: translateX(0);
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-card ul{
    list-style: "●";
}

.section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-card ul li{
    padding-left: 0.4rem;
}

@media only screen and (min-width: 767px){
    <?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>.right <?= '.' . PREFIX ?>-timeline-item::before,
    <?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>.left <?= '.' . PREFIX ?>-timeline-item::after{
        content: "";
    }

    <?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>.left <?= '.' . PREFIX ?>-timeline-wrapper{
        left: unset;
        right: 0;
    }

    .<?= PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>.left .<?= PREFIX ?>-timeline-card{
        transform: translateX(-5rem);
    }

}

@media only screen and (max-width:768px) {
    .section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>-title-img{
        top: 0;
        position: relative;
    }

    <?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-timeline-item::before{
        content: "";
    }
}

@media only screen and (max-width:576px) {
    .section-<?= ROADMAP_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>-spacer{
        width: 0%;
    }
}
</style>