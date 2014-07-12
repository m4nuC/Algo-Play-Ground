// https://en.wikipedia.org/wiki/Knuth%E2%80%93Morris%E2%80%93Pratt_algorithm

var string = "ABC ABCDAB ABCDABCDABDE";
var word = "ABCDABD";

var kmpSearch = function( wrd, str ) {
        var pmi = 0;    // Parallel match index
        var cl = 0;     // Current letter
        var pcl = 0;    // parallel current letter
        for ( var i = 0, l = str.length; i < l; i++ ) {
            if ( str[ i ] === wrd[ cl ] ) {
                if ( cl === wrd.length - 1 ) {
                    return 'found at: ' + (i - (wrd.length));
                }
                // parallel
                if ( cl > 0 && str[ i ] === wrd[ pcl ] ) {
                    pcl ++;
                    pmi = i;
                } else {
                    pcl = 0;
                    pmi = 0;
                }
                cl ++;

            } else {
                if ( pmi > 0 ) {
                    console.log('current itteration', i);
                    cl = pcl;
                    i = pmi;
                    console.log('resuming at ', i);
                    console.log('current letter', cl);
                    console.log('pararllel letter', pcl);
                    console.log('pararllel index', pmi);
                } else {
                    cl = 0;
                }
                pcl = 0;
                pmi = 0;
            }
        };
        return "no Match";
    };

//String.prototype.kmpSearch = kmpSearch;
console.log(kmpSearch(word, string));


