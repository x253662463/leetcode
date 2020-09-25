package _1two_sum

import (
	"github.com/stretchr/testify/assert"
	"testing"
)

type params struct {
	nums     []int
	target   int
	expected []int
}

func TestTwoSum(t *testing.T) {
	testParam := []params{
		{
			[]int{2, 7, 11, 15},
			9,
			[]int{0, 1},
		},
		{
			[]int{3, 2, 4},
			6,
			[]int{1, 2},
		},
		{
			[]int{3, 3},
			6,
			[]int{0, 1},
		},
	}

	for _, tt := range testParam {
		actual := twoSum(tt.nums, tt.target)
		assert.Equal(t, tt.expected, actual)
	}

}
