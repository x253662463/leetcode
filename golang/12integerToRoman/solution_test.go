package solution

import (
	"github.com/stretchr/testify/assert"
	"testing"
)

type params struct {
	num      int
	expected string
}

func TestTwoSum(t *testing.T) {
	testParam := []params{
		{3, "III"},
		{4, "IV"},
		{9, "IX"},
		{58, "LVIII"},
		{1994, "MCMXCIV"},
	}

	for _, tt := range testParam {
		actual := intToRoman(tt.num)
		assert.Equal(t, tt.expected, actual)
	}

}
