package _1two_sum

import (
	"github.com/stretchr/testify/assert"
	"testing"
)

type params struct {
	s        string
	p        string
	expected bool
}

func TestTwoSum(t *testing.T) {
	testParam := []params{
		{"aa", "a", false},
		{"aa", "a*", true},
		{"ab", ".*", true},
		{"aab", "c*a*b", true},
		{"mississippi", "mis*is*p*.", false},
	}

	for _, tt := range testParam {
		actual := isMatch(tt.s, tt.p)
		assert.Equal(t, tt.expected, actual)
	}

}
