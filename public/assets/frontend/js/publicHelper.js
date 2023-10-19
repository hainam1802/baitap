/* Vaanres */
/// <reference path="../typings/index.d.ts" />
var PublicHelper = /** @class */ (function () {
    function PublicHelper() {
        this.dateFormatter = "DD-MM-YYYY";
        this.minDate = "01-01-2015";
    }
    PublicHelper.prototype.randomNumber = function (min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    PublicHelper.prototype.remove_unicode = function (str) {
        str = str.toLowerCase();
        str = str.replace(/Ă |Ă¡|áº¡|áº£|Ă£|Ă¢|áº§|áº¥|áº­|áº©|áº«|Äƒ|áº±|áº¯|áº·|áº³|áºµ/g, "a");
        str = str.replace(/Ă¨|Ă©|áº¹|áº»|áº½|Ăª|á»|áº¿|á»‡|á»ƒ|á»…/g, "e");
        str = str.replace(/Ă¬|Ă­|á»‹|á»‰|Ä©/g, "i");
        str = str.replace(/Ă²|Ă³|á»|á»|Ăµ|Ă´|á»“|á»‘|á»™|á»•|á»—|Æ¡|á»|á»›|á»£|á»Ÿ|á»¡/g, "o");
        str = str.replace(/Ă¹|Ăº|á»¥|á»§|Å©|Æ°|á»«|á»©|á»±|á»­|á»¯/g, "u");
        str = str.replace(/á»³|Ă½|á»µ|á»·|á»¹/g, "y");
        str = str.replace(/Ä‘/g, "d");
        str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g, "-");
        str = str.replace(/-+-/g, "-");
        str = str.replace(/^\-+|\-+$/g, "");
        return str;
    };
    PublicHelper.prototype.isEmpty = function (str) {
        return (!str || 0 === str.length);
    };
    PublicHelper.prototype.isBlank = function (str) {
        return (!str || /^\s*$/.test(str));
    };
    PublicHelper.prototype.stripSpaces = function (str) {
        if (!this.isBlank(str)) {
            return $.trim(str.replace(/ /g, ''));
        }
        else {
            return "";
        }
    };
    PublicHelper.prototype.removeExtraSpaces = function (str) {
        str = str.replace(/^\s+|\s+$/g, "");
        return str;
    };
    return PublicHelper;
}());
var publicHelper = new PublicHelper();
1